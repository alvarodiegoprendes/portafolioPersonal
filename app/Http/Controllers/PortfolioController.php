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

        // Crear el mensaje de WhatsApp
        $whatsappMessage = "Hola Álvaro! 👋\n\n";
        $whatsappMessage .= "*De:* {$request->name}\n";
        $whatsappMessage .= "*Email:* {$request->email}\n";
        $whatsappMessage .= "*Asunto:* {$request->subject}\n\n";
        $whatsappMessage .= "*Mensaje:*\n{$request->message}";

        // Codificar el mensaje para URL
        $encodedMessage = urlencode($whatsappMessage);

        // Número de WhatsApp (formato internacional sin + ni espacios)
        $whatsappNumber = '34692852139';

        // URL de WhatsApp
        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";

        // Guardar en logs para registro
        Log::info('Nuevo mensaje de contacto redirigido a WhatsApp', [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirigir a la home con la URL de WhatsApp para abrirla con JavaScript
        return redirect()->route('home')
            ->with('whatsapp_url', $whatsappUrl)
            ->with('success', 'Redirigiendo a WhatsApp...');
    }
}
