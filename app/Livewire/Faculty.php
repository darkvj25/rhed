<?php

namespace App\Livewire;

use App\Models\Faculty as ModelsFaculty;
use Livewire\Component;

class Faculty extends Component
{
    public $faculties;

    public function mount(){
        $this->faculties = ModelsFaculty::get();
    }
    public function render()
    {

        return view('livewire.faculty');
    }
}
