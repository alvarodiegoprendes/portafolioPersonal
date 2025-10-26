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
            // Datos para el email
            $emailData = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            // Enviar el email
            Mail::send('emails.contact', ['data' => $emailData], function ($mail) use ($request) {
                $mail->to('alvarodiegoprendes@gmail.com')
                    ->replyTo($request->email, $request->name)
                    ->subject('Nuevo mensaje de contacto: ' . $request->subject)
                    ->from(config('mail.from.address'), config('mail.from.name'));
            });

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
