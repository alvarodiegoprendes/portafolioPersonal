<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    /**
     * Muestra la página principal del portafolio
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Procesa el formulario de contacto
     */
    public function sendContact(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email debe ser una dirección válida.',
            'subject.required' => 'El asunto es obligatorio.',
            'message.required' => 'El mensaje es obligatorio.',
            'message.min' => 'El mensaje debe tener al menos 10 caracteres.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Usar SendGrid API directamente
            $apiKey = env('SENDGRID_API_KEY');
            
            if (!$apiKey) {
                throw new \Exception('SendGrid API Key no configurada');
            }

            // Datos para el email
            $emailData = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            // Crear el contenido HTML del email
            $htmlContent = view('emails.contact', ['data' => $emailData])->render();

            // Preparar datos para SendGrid API
            $data = [
                'personalizations' => [
                    [
                        'to' => [
                            [
                                'email' => 'alvarodiegoprendes@gmail.com',
                                'name' => 'Álvaro Diego Prendes'
                            ]
                        ],
                        'subject' => 'Nuevo mensaje de contacto: ' . $request->subject
                    ]
                ],
                'from' => [
                    'email' => 'alvarodiegoprendes@gmail.com',
                    'name' => 'Álvaro Diego Prendes'
                ],
                'reply_to' => [
                    'email' => $request->email,
                    'name' => $request->name
                ],
                'content' => [
                    [
                        'type' => 'text/html',
                        'value' => $htmlContent
                    ]
                ]
            ];

            // Enviar vía cURL a SendGrid API
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.sendgrid.com/v3/mail/send');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $apiKey,
                'Content-Type: application/json'
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $result = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            if ($httpCode !== 202) {
                throw new \Exception('Error de SendGrid API: ' . $result);
            }

            // Registrar en logs
            Log::info('Nuevo mensaje de contacto enviado por SendGrid API', [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'http_code' => $httpCode
            ]);

            return redirect()->route('home')
                ->with('success', '¡Mensaje enviado correctamente! Te responderé pronto.');

        } catch (\Exception $e) {
            // Log del error
            Log::error('Error al enviar email de contacto', [
                'error' => $e->getMessage(),
                'data' => $request->all()
            ]);

            return redirect()->back()
                ->with('error', 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo.')
                ->withInput();
        }
    }
}
