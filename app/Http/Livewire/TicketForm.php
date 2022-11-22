<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketForm extends Component
{
    public $orders, $meal;

    public function render ()
    {
        return view('livewire.ticket-form');
    }

    public function resetInput ()
    {
        $this->orders   = null;
        $this->meal     = null;
    }

    public function create ()
    {

        $validated = $this->validate ([

            'meal'      => 'required',
            'orders'    => 'required|numeric|integer|min:1'

        ]);

        $user = Auth::user ();

        $creationGrant = Ticket::where ([

            ['date', date('Y-m-d')],
            ['number', 0]

        ])-> first ();

        //dd($creationGrant);

        if ( is_null ( $creationGrant )) {

            session ()->flash( 'ticketZero', 'Nous sommes fermés pour l\'instant. Merci de revenir plus tard' );

        } 
        else {

            $tickets = Ticket::where ([
                [ 'user_id', '=', $user->id ],
                [ 'meal', '=', $this->meal ],
                [ 'date', '=', date("Y/m/d") ],

            ])->get ();

            if ( sizeof ( $tickets ) != 0) {

                session ()->flash( 'duplicateTicket', 'Vous avez déjà un ticket pour le ' . $this->meal );
            } 

            else {

                $lastTicket = Ticket::where ( 'date', date( 'Y-m-d' ) )
                                    ->orderBy( 'number', 'desc' )->first ();

                $ticket = Ticket::create ([

                    'meal'      => $this->meal,
                    'date'      => date( "Y/m/d" ),
                    'user_id'   => Auth::user() ->id,
                    'orders'    => $this->orders,
                    'number'    => $lastTicket->number + 1,

                ]);
                session ()->flash( 'successMessage', 'Vous avez réservé un ticket pour le ' . $this->meal );
            }
        }

        $this->resetInput ();
        $this->emitTo ( 'ticket-component', 'created');

    }
}
