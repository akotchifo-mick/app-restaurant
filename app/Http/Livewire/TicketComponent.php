<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TicketComponent extends Component
{

    protected $listeners = [
        'created'=> '$refresh',
        'update'    =>  '$refresh',
    ];

    public function render()
    {
        $user = Auth::user();
        return view('livewire.ticket-component', [
            'tickets' => $user->ticketsToday ( $user ),
        ]);
    }

 
}
