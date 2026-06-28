<?php

namespace App\Livewire;

use App\Models\Block;
use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{
    public $males;
    public $id;
    public $females;
    public $block_id;
    public function mount($id){
        $this->id = $id;
        $this->males =  Student::where('gender', '=', 'male')
                                ->where('block_id', '=', $id)
                                ->get();
        $this->females =  Student::where('gender', '=', 'female')
                                ->where('block_id', '=', $id)
                                ->get();
         $block = Block::where('id', '=', $id)->first();
         $this->block_id = $block->year_id;

    }
    public function render()
    {
        return view('livewire.student-list',
                    [
                        'males'=>$this->males,
                        'females'=>$this->females,
                    ]);
    }
}
