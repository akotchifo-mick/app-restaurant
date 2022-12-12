<?php

namespace App\Http\Middleware;

use App\Events\AuthRequiredEvent;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use RealRashid\SweetAlert\Facades\Alert;

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

            session()->flash('authRequired', 'Vous devez être authentifié pour accéder au contenu demandé');            
            return route('welcome');

        }
    }
}
