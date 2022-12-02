<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketZero extends Component
{

    protected $listeners = ['create'];
    public function render()
    {
        $ticketZero = Ticket::where ([
            ['date', date('Y-m-d')],
            ['number', 0]
            ])-> first ();
            
        if( !is_null($ticketZero) )
            session()->flash('zeroSet', 'Countdown to next ticket Zero');        

        return view('livewire.ticket-zero');
    }

    public function create () {

        $admin = Auth::user ();
        Ticket::create([
            'meal'      => 'Lunch',
            'date'      => date("Y/m/d"),
            'user_id'   => $admin->id,
            'orders'    => 1,
            'number'    => 0,
            //'consumed'  => 0
        ]);
    }

    
}
