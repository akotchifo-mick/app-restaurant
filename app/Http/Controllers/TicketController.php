<?php

namespace App\Http\Controllers;

use App\Events\TicketCreatedEvent;
use App\Models\Ticket;
use App\View\Components\essai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class TicketController extends Controller
{
    public function create(Request $request){
        $user = Auth::user();
        if(!$user){
            return 0;
        }

        $tickets = Ticket::where([
            ['user_id', '=', $user->id],['meal', '=', $request->meal], ['date', '=', date("Y/m/d")],
        ])->get();            
        if(sizeof($tickets) != 0){
            session()->flash('error', 'You can\'t create another '.$request->meal. ' ticket');           
        }
        else{

            Ticket::create([
                'meal'      => $request['meal'],
                'date'      => date("Y/m/d"),
                'user_id'  => Auth::user()->id,
                //orders=> $request['orders']
            ]);
            session()->flash('message', 'Ticket successfully created');
        }

        return redirect()->back(); //redirect('home');
    }
}
