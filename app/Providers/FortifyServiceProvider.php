<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Contracts\RegisterResponse as ContractsRegisterResponse;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Responses\RegisterResponse;

use function PHPUnit\Framework\returnSelf;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Fortify::registerView( function () {
            return view ( 'users.register' );
        });

        Fortify::authenticateUsing((function (Request $request){
            $user = User::where('cardId', $request->cardId)->first();
                        
            if($user && Hash::check($request->password, $user->password)) 
                return $user;
                
            else {                
                session()->flash('authFailed', 'failed');
            }
            
        })); 

        Fortify::requestPasswordResetLinkView(function () {
            return view('users.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('users.reset-password', ['request' => $request]);
        });

        Fortify::verifyEmailView(function () {
            return view('users.verify-email');
        });

        Fortify::confirmPasswordView(function () {
            return view('users.confirm-password');
        });

        //$this->app->singleton ( ContractsRegisterResponse::class, RegisterResponse::class);

        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
