<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\TicketController;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {$user = Auth::user();

    if (is_null($user))
            return view('users.footer')->with('tickets', '');
    
    else {

        if ($user->role == 'admin')
            return view('admin.starter');

        else {

            $tickets = Ticket::where([
                ['user_id', '=', $user->id], ['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")]
            ])->orWhere([
                ['user_id', '=', $user->id], ['meal', '=', 'Lunch'], ['date', '=', date("Y/m/d")]
            ])->orWhere([
                ['user_id', '=', $user->id], ['meal', '=', 'Dinner'], ['date', '=', date("Y/m/d")]
            ])
                ->orderByDesc('date')->limit(3)->get();
            return view('users.footer', compact('tickets'));
        }
    }
});

Route::get('layout', function () {
    return view('users.layout');
})->name('layout');

Route::get ('/dashboard', function () {
    return view ( 'dashboard' );
})->middleware ('auth')->name ( 'dashboard' );

Route::get('/', function () {
    $user = Auth::user();

    if (is_null($user))
            return view('users.welcome')->with('tickets', '');
    
    else {

        if ($user->role == 'admin')
            return view('admin.starter');

        else {

            $tickets = Ticket::where([
                ['user_id', '=', $user->id], ['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")]
            ])->orWhere([
                ['user_id', '=', $user->id], ['meal', '=', 'Lunch'], ['date', '=', date("Y/m/d")]
            ])->orWhere([
                ['user_id', '=', $user->id], ['meal', '=', 'Dinner'], ['date', '=', date("Y/m/d")]
            ])
                ->orderByDesc('date')->limit(3)->get();
            return view('users.welcome', compact('tickets'));
        }
    }
})->name('welcome');



Route::view('ticket-form', 'livewire.home');

/**
 * everything above this section works fine
 */




Route::get('/admin', function () {

    return view('admin.starter');
});

Route::get('/admin/students', function () {

    return view('admin.students');
}) -> middleware('auth');
Route::view('ticket-zero', 'livewire.home');
Route::view('the-students', 'livewire.home');
