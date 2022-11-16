<?php

namespace App\Listeners;

use App\Events\AuthRequiredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuthRequiredListener
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
     * @param  \App\Events\AuthRequiredEvent  $event
     * @return void
     */
    public function handle(AuthRequiredEvent $event)
    {
        $html = view('components.essai', ['x-essai']);
        return $html; 
    }
}
