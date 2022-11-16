<?php

namespace App\Listeners;

use App\Events\TicketCreatedEvent;
use App\View\Components\essai;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TicketCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\TicketCreatedEvent  $event
     * @return void
     */
    public function handle(TicketCreatedEvent $event)
    {
        $html = view('components.essai', ['x-essai']);
        return $html; 
        //$successful = new essai();
        //$successful->render();   
    }
}
