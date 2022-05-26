<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $contato;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Contato - BRDSoft');
        $this->to($this->contato->email, $this->contato->nome);
        return $this->markdown('Site.emailContato', ['contato' => $this->contato]);
    }
}
