<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateTicket extends Component
{
    public $meal, $orders, $user;

    public function render()
    {
        return view('livewire.create-ticket');
    }

    
}
