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

Route::get('/test', function() {
    return view('test');
});

Route::get('layout', function(){
    return view('layout');
}) ->name('layout');

Route::get('/', function(){
    $user = Auth::user();
    if(is_null($user))
        return view('welcome');
    
    else {
        $tickets = Ticket::where([
            ['user_id', '=', $user->id],['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")]
        ])->orWhere([
            ['user_id', '=', $user->id],['meal', '=', 'Lunch'], ['date', '=', date("Y/m/d")]
        ])->orWhere([
            ['user_id', '=', $user->id],['meal', '=', 'Dinner'], ['date', '=', date("Y/m/d")]
        ])
        ->orderByDesc('date')->limit(3)->get();
        return view('welcome',compact('tickets'));
    }    
})->name('welcome');

/*Route::post('/lauch', [TicketController::class, 'create'])
    ->middleware('auth')->name('requestTicket');*/

Route::view('ticket-form', 'livewire.home');

Route::get('/delete', function() {
    return view('delete');
});

Route::get('/setZero', function() {
    return view('zero');
});

Route::post('/setZero', [TicketController::class, 'setZero'])->name('setZero');
Route::post('/deleteAll', [TicketController::class, 'destroy'])->name('deleteAll');

