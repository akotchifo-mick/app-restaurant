<?php

namespace App\Http\Controllers;

use App\Events\TicketCreatedEvent;
use App\Models\Ticket;
use App\Models\User;
use App\View\Components\essai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class TicketController extends Controller
{
    public function create(Request $request){
        $user = Auth::user();

        $creationGrant = Ticket::where([
                            ['date', date('Y-m-d')],
                            ['number', 0]
                            ])->first();    

        if(is_null($creationGrant)){
            session()->flash('ticketZero', 'Nous sommes fermés pour l\'instant. Merci de revenir plus tard');
        }
        else{
            $tickets = Ticket::where([
                            ['user_id', '=', $user->id],
                            ['meal', '=', $request->meal],
                            ['date', '=', date("Y/m/d")],
                        ])->get();         

            if(sizeof($tickets) != 0){
                session()->flash('duplicateTicket', 'Vous avez déjà un ticket pour le '.$request->meal);           
            }
            else{
                $lastTicket = Ticket::where('date', date('Y-m-d'))
                                ->orderBy('number', 'desc')->first();

                Ticket::create([
                    'meal'      => $request['meal'],
                    'date'      => date("Y/m/d"),
                    'user_id'   => Auth::user()->id,
                    'orders'    => $request['orders'],
                    'number'    => $lastTicket->number+ 1,
                ]);
                session()->flash('successMessage', 'Vous avez réservé un ticket pour le '. $request->meal);
            }
        }

        return redirect()->back();
    }

    public function destroy (Request $request){
        $tickets = Ticket::where('date', date('Y-m-d'))->get() ;
        foreach ($tickets as $ticket){
            $ticket->delete();
        }
        return redirect()->back();
    }

    public function setZero(Request $request){
        $admin = User::where('role', 'admin')->first();
        Ticket::create([
            'meal'      => 'Lunch',
            'date'      => date("Y/m/d"),
            'user_id'   => $admin->id,
            'orders'    => 1,
            'number'    => 0,
            'consumed'  => 0
        ]);
        return redirect()->back();
    }
}
