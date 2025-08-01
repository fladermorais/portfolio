<?php

namespace App\Observers;

use App\Mail\ContatoMail;
use App\Models\Config;
use App\Models\Contato;
use Illuminate\Support\Facades\Mail;

class ContatoObserver
{
    /**
     * Handle the Contato "created" event.
     *
     * @param  \App\Models\Contato  $contato
     * @return void
     */
    public function created(Contato $contato)
    {
        $config = Config::first();
        Mail::to($config->email)
            ->cc($contato->email)->later(now()->addMinutes(1), new ContatoMail($contato, $config));
    }

    /**
     * Handle the Contato "updated" event.
     *
     * @param  \App\Models\Contato  $contato
     * @return void
     */
    public function updated(Contato $contato)
    {
        //
    }

    /**
     * Handle the Contato "deleted" event.
     *
     * @param  \App\Models\Contato  $contato
     * @return void
     */
    public function deleted(Contato $contato)
    {
        //
    }

    /**
     * Handle the Contato "restored" event.
     *
     * @param  \App\Models\Contato  $contato
     * @return void
     */
    public function restored(Contato $contato)
    {
        //
    }

    /**
     * Handle the Contato "force deleted" event.
     *
     * @param  \App\Models\Contato  $contato
     * @return void
     */
    public function forceDeleted(Contato $contato)
    {
        //
    }
}
