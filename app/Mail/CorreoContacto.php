<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class CorreoContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $email;
    public $mensaje;


    public function __construct($datos)
    {
        $this->nombre = $datos['nombre'];
        $this->email = $datos['email'];
        $this->mensaje = $datos['mensaje'];
    }

    public function build()
    {
        return $this->from('destination@example.com', 'Nombre')
                    ->subject('Nuevo mensaje de contacto')
                    ->view('emails.contacto');
    }

   

}
