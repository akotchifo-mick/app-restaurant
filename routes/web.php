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

Route::get('/', function () {       
    return view('welcome');
})->name('welcome');

Route::get('/test', function() {
    return view('test');
});

Route::get('layout', function(){
    return view('layout');
}) ->name('layout');

Route::get('/home', function(){
    $user = Auth::user();
    $tickets = Ticket::where([
        ['user_id', '=', $user->id],['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")]
    ])->orWhere([
        ['user_id', '=', $user->id],['meal', '=', 'Lunch'], ['date', '=', date("Y/m/d")]
    ])->orWhere([
        ['user_id', '=', $user->id],['meal', '=', 'Dinner'], ['date', '=', date("Y/m/d")]
    ])
    ->orderByDesc('date')->limit(3)->get();
    return view('welcome',compact('tickets'));
})->middleware('auth');

Route::post('/lauch', [TicketController::class, 'create'])
    ->middleware('auth')->name('prudo');
