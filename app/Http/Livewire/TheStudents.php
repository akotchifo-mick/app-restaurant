<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TheStudents extends Component
{

    use WithPagination; 
    public string $search = '';
    public $orderDirection = 'ASC';
    public $orderField = 'cardId';
    public $getUserId = 0;

    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search'    =>  [ 'except' => '' ]
    ];
    protected $listeners = [
        'onClosed'    =>  '$refresh',
        'refreshModal'  =>   '$refresh',
        'resetUserId'  
    ];

    public function setOrderField (string $name) {
        if( $name == $this->orderField )
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';

        else{
            $this->orderField = $name;
            $this->reset('orderDirection');
        }
    }

    public function setUser ( int $id ){
        $this->emit( 'refreshModal' ); 
        $this->getUserId = $id;  
        $this->dispatchBrowserEvent('fireModal'); 
    } 

    public function updating ( $name, $value){
        if( $name == 'search')
            $this->resetPage();
    }

    
     public function resetUserId (){
       $this->reset('getUserId');
       $this->emit('refreshModal');
    }
    
    public function render ()
    {        
        return view( 'livewire.the-students', [
            'allStudents'=> User::where([
                ['role', '=', 'student'], ['lastName', 'LIKE', "%{$this->search}%" ]
            ])->orWhere([
                ['role', '=', 'student'], ['firstName', 'LIKE', "%{$this->search}%"]
            ])->orderBy ( 
                $this->orderField, $this->orderDirection
            )->paginate(8)
        ]);
    }


}
