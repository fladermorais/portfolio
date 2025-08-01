<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    private $contato;
    private $config;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contato, $config)
    {
        $this->contato = $contato;
        $this->config = $config;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Nova mensagem do site');
        $this->to($this->contato->email)
             ->cc($this->config->email);
             
        return $this->markdown('Site.emailContato', ['contato' => $this->contato]);
    }
}
