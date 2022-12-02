<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetails extends Component
{
    public int $userId = 2;
    public $user;

    protected $listeners = ['updateUserDetails'];


    public function updateUserDetails (int $nombre){
        dd($nombre);
        //if(!is_null ($nombre) ) 
           $this->userId = $nombre;
    }

    public function mount (){
        $this->user = User::find($this->userId);
    }

    public function render()
    {
        return view('livewire.user-details');
    }
}
