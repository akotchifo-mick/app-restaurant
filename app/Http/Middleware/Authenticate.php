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
            session()->flash('authRequired', 'You can\'t access to this page without being logged in');
            return route('welcome');
            
        }
    }
}
