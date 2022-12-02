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

    public function setOrderField (string $name) {
        if( $name == $this->orderField )
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';

        else{
            $this->orderField = $name;
            $this->reset('orderDirection');
        }
    }

    public function setUser ( int $id ){
        $this->getUserId = $id;
        //$this->emitTo( 'user-details', 'getUserDetails');
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
