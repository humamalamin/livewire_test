<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;

class StudentIndex extends Component
{
    use WithPagination;

    public $search;
    public $page = 1;

    protected $listeners = [
        'studentAdded'
    ];

    protected $updateQueryString = [
        ['page' => ['except' => 1]],
        ['search' => ['except' => '']]
    ];

    public function studentAdded()
    {

    }

    public function render()
    {
        return view('livewire.student-index', [
            'students' => $this->search === null ? Student::latest()->paginate(5) : Student::where('name', 'like', '%'.$this->search.'%')->latest()->paginate(5)
        ]);
    }
}
