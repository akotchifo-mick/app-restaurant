<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class UserDetails extends ModalComponent 
{

    public User $user;
    public Ticket $tickets;

    protected $listeners = [
        'onClosed'    =>  '$refresh'
    ];

    public function closed() 
    {
        $this->emit('onClosed');
        $this->emit('resetUserId');
    }

    public function render()
    {
        return view('livewire.user-details');
    }
}
