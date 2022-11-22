<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketComponent extends Component
{
    public $tickets;

    public function render()
    {


        return view('livewire.ticket-component');
    }

    protected $listeners = ['created'];

    public function created()
    {

        $user = Auth::user();

        $this->tickets = Ticket::where([
            ['user_id', '=', $user->id], ['meal', '=', 'Breakfast'], ['date', '=', date("Y/m/d")]
        ])->orWhere([
            ['user_id', '=', $user->id], ['meal', '=', 'Lunch'], ['date', '=', date("Y/m/d")]
        ])->orWhere([
            ['user_id', '=', $user->id], ['meal', '=', 'Dinner'], ['date', '=', date("Y/m/d")]
        ])
            ->orderByDesc('date')->limit(3)->get();
    }
}
