<?php

namespace App\Http\Controllers;

use App\Events\TicketCreatedEvent;
use App\Models\Ticket;
use App\View\Components\essai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function create(Request $request){
        $user = Auth::user();
        if(!$user){
            return 0;
        }

        $tickets = Ticket::where([
            ['user_id', '=', $user->id],['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")],
        ])->get();
        if(!$tickets){
            return 0;
        }

       Ticket::create([
            'meal'      => $request['meal'],
            'date'      => date("Y/m/d"),
            'user_id'  => Auth::user()->id,
            //orders=> $request['orders']
        ]);
        event( new TicketCreatedEvent());
        //$successful = new essai();
        //$successful->render();

        return redirect()->back(); //redirect('home');
    }
}
