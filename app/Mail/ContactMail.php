<?php

namespace App\Mail;

use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $demo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo)
    {
         $this->demo = $demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {

        return $this->from('hello@kinismexico.com')
                            ->view('emails.contact')
                            ->text('emails.contact_plain')
                            ->with(
                              [
                                    'nombre' => $request->input('nombre'),
                                    'email' => $request->input('email'),
                                    'telefono' => $request->input('telefono'),
                                    'comentario' => $request->input('comentario'),
                              ]);
    }
}
