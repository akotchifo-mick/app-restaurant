<?php

namespace App\Http\Middleware;

use App\Events\AuthRequiredEvent;
use Alert;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            //session()->flash('authRequired', 'Vous devez d\'être authentifié pour accéder au contenu demandé');
            //Alert::error(' ERREUR 404 ACCES NON AUTHORISE ', 'Vous devez être authentifié pour accéder au contenu demandé' );
            return route('welcome');
            
        }
    }
}
