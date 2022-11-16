<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array $input
     * @return \App\Models\User
     */
    
    public function create(array $input)
    {       
        Validator::make($input, [
            'lastName' => ['required', 'string', 'max:255'],
            'firstName' => ['required', 'string', 'max:255'],
            'cardId'    => ['required', 'numeric', 'min:10000000', 'max:39999999', Rule::unique(User::class)],            
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'password_confirmation'     =>  ['required', 'string'],
        ])->validate();

        $user = User::create([
            'lastName' => $input['lastName'],
            'firstName' => $input['firstName'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role'      => 'student',
            'cardId'    => $input['cardId'],

        ]);

        event(new Registered($user));
        Auth::login($user);
        return view('welcome')->with('status', 'Profile stored!');
    }
}
