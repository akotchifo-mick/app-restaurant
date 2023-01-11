<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class TicketForm extends Component
{
    public $orders, $meal;

    protected $rules = [
        'meal' =>'required|string',
        'orders' =>'required|min:1|max:5',        
    ];

    protected $listeners = array('update');
    

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

        $this->validate ();
        $user = Auth::user ();
        $creationGrant = Ticket::where ([
            ['date', date('Y-m-d')],
            ['number', 0]
        ])-> first ();

        if ( is_null ( $creationGrant )) {
            session ()->flash( 'ticketZero', 'Nous sommes fermés pour l\'instant. Merci de revenir plus tard' );
            $this->dispatchBrowserEvent('swal:warningMessage', [
                'type' => 'warning',
                'title' => 'Nous sommes fermés pour l\'instant. Merci de revenir plus tard',
                'text' => '',
            ]);

        } 
        else {
            $tickets = Ticket::where ([
                [ 'user_id', '=', $user->id ],
                [ 'meal', '=', $this->meal ],
                [ 'date', '=', date("Y/m/d") ],
            ])->get ();

            if ( sizeof ( $tickets ) != 0) {
                session ()->flash( 'duplicateTicket', 'Vous avez déjà un ticket pour le ' . $this->meal );

                $this->dispatchBrowserEvent('swal:confirmDuplicate', [
                    'type' => 'warning',
                    'title' => 'Confirmation de modification',
                    'text' => 'Vous avez déjà un ticket pour le ' . $this->meal.'. Voulez-vous le modifier?',
                    'id'    => $tickets[0]->id,
                    'orders' => $this->orders,
                ]);
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

                $this->dispatchBrowserEvent('swal:successMessage', [
                    'type' => 'success',
                    'title' => 'Confirmation de réservaton',
                    'text' => 'Vous avez réservé un ticket pour le ' .$this->meal,
                ]);
                $this->emit('createdTicket');
            }
        }
        
        $this->resetInput ();
    }

    public function update ($id, $orders)
    {
        $changes = Ticket::find($id);
        $changes->orders = $orders;
        $changes->save();
        $this->emit('updateScreen');
    }
}
