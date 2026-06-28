<?php

namespace App\Livewire;

use App\Models\BadComment;
use App\Models\Report as ModelsReport;
use Livewire\Component;

class Report extends Component
{
    public $words;
    public function delete($id){
        ModelsReport::findOrFail($id)->delete();
        session()->flash('delete', 'report deleted successfully.');
        return redirect()->route('report');
    }
    public function save(){
        $data =[
            'comment' =>$this->words,
        ];
        BadComment::create($data);
        session()->flash('save', 'bad updated successfully.');
        return redirect()->route('report');
    }
    public function render()
    {
        $reports = ModelsReport::has('forum')->orderBy('created_at', 'desc')->get();
        return view('livewire.report',['reports' => $reports]);
    }
}
