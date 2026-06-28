<?php

namespace App\Livewire;

use App\Models\SubjectList as ModelsSubjectList;
use Livewire\Component;

class SubjectList extends Component
{
    public $id;
    public $first;
    public $second;
    public $third;
    public $fourth;
    public function mount($id){
        $this->id = $id;
        $this->first = ModelsSubjectList::where('year','1st year')
                                    ->where('course_id',$id)->get();
        $this->second = ModelsSubjectList::where('year','2nd year')
                                    ->where('course_id',$id)->get();
        $this->third = ModelsSubjectList::where('year','3rd year')
                                    ->where('course_id',$id)->get();
        $this->fourth = ModelsSubjectList::where('year','4th year')
                                    ->where('course_id',$id)->get();
    }
    public function delete($id)
    {
        $subject = ModelsSubjectList::findOrFail($id);

        $subject->delete();

        session()->flash('delete', 'Event deleted successfully.');
        $this->redirectIntended('subject-list',['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.subject-list');
    }
}
