<?php

namespace App\Http\Middleware;

use App\Events\AuthRequiredEvent;
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
            event( new AuthRequiredEvent ($request));
            return route('welcome');
            
        }
        /**
         * route ('welcome')  OK
         * 
         */
        //route('welcome')->with('status', 'failed') return redirect()->route('welcome') ;
    }
}
