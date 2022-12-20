<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Livewire\Component;

class ButtonReserver extends Component
{

    public function nextAction(){
        //on vérifie si les numéros de tickets ont déjà été réinitialisés avec la présence du ticket 0
        $creationGrant = Ticket::where ([

            ['date', date('Y-m-d')],
            ['number', 0]

        ])-> first ();

        //si le ticket 0 n'existe pas encore, on avertit l'utilisateur et on lui demande de patienter

        if ( is_null ( $creationGrant )) {
            session ()->flash( 'ticketZero', 'Nous sommes fermés pour l\'instant. Merci de revenir plus tard' );
            $this->dispatchBrowserEvent('swal:warningMessage', [
                'type' => 'warning',
                'title' => 'Nous sommes fermés pour l\'instant. Merci de revenir plus tard',
                'text' => '',
            ]);
        } 

        // le ticket 0 existe, on redirige l'utilisateur sur la page de réservation des tickets
        else
            redirect( route('dashboard') );
    }
    public function render()
    {
        return view('livewire.button-reserver');
    }
}
