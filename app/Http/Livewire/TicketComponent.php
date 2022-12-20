<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketComponent extends Component
{
    public $tickets;

    protected $listeners = [
        'createdTicket'             => '$refresh',
        'updateTicketsScreen'       =>  '$refresh',
    ];

    public function render()
    {
        
        $user = Auth::user();
        $this->tickets =$user->ticketsToday ( $user );
        return view('livewire.ticket-component');
    
    }

 
}
