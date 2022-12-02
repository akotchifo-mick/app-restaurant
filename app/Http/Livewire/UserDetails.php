<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetails extends Component
{

    
    public User $user;

    /*protected $listeners = ['updateUserDetails'];


    public function updateUserDetails (){
        dd($nombre);
        //if(!is_null ($nombre) ) 
           $this->userId = $nombre;
    }   
    }*/

    public function render()
    {
        return view('livewire.user-details');
    }
}
