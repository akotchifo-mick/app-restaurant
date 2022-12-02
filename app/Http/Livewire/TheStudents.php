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

    protected $paginationTheme = 'bootstrap';

    public function setOrderField (string $name) {
        if( $name == $this->orderField )
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';

        else{
            $this->orderField = $name;
            $this->reset('orderDirection');
        }
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
