<?php

namespace App\Livewire;

use App\Models\Block as ModelsBlock;
use App\Models\Year;
use Livewire\Component;

class Block extends Component
{
    public $blocks;
    public $course_id;
    public $id;
    public function mount($id){
        $this->blocks = ModelsBlock::where('year_id', $id)->get();

        $year = Year::where('id', $id)->first();
        $this->course_id = $year->course_id;
        $this->id = $id;
    }
    public function delete($id){
        ModelsBlock::findOrFail($id)->delete();
        session()->flash('delete', 'Block deleted successfully.');
        return redirect()->route('block',['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.block',['blocks' => $this->blocks]);
    }
}
