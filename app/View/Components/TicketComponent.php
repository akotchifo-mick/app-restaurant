<?php

namespace App\View\Components;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class TicketComponent extends Component
{
    /**
     * the tickets created by a user on this day
     * @var Ticket
     */
    public $tickets;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tickets)
    {
        $user = Auth::user();
        $this->tickets  = Ticket::where('cardId', $user->cardId);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ticket-component');
    }
}