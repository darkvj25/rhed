<?php

namespace App\Livewire;

use App\Models\Year as ModelsYear;
use Livewire\Component;

class Year extends Component
{
    public $years;
    public $id;
    public function mount($id){
        $this->id = $id;
        $this->years = ModelsYear::where('course_id', $id)->get();
    }
    public function delete($id){
        ModelsYear::findOrFail($id)->delete();
        session()->flash('delete', 'Year deleted successfully.');
        return redirect()->route('year',['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.year',['years' => $this->years]);
    }
}
