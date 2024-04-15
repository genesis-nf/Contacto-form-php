<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoContacto;
use App\Models\ContactMessage;


class ContactoController extends Controller
{
    public function showForm()
    {
        return view('contacto');
    }

    public function enviarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'mensaje' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        $emailDestino = 'destination@example.com';
        
        Mail::to($emailDestino)->send(new CorreoContacto($request->all()));

        $request->session()->flash('success','¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto');

        return redirect()->route('mensaje_enviado');
    }


}
