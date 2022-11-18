<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketForm extends Component
{
    public function render()
    {
        return view('livewire.ticket-form');
    }
    public function create() {
        $user = Auth::user();

        $this->validate([
            'meal'      => 'required',
            'orders'    => 'required|numeric|max:5|min:1'      
        ]);

        $tickets = Ticket::where([
            ['user_id', '=', $user->id],['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")],
        ])->get();

        if($tickets){
            session()->flash('message', 'You can\'t create another breakfast ticket');
        }

        

    }

    public function resetinput() {

    }
}
