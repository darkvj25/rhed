<?php

namespace App\Livewire;

use App\Models\Forum;
use App\Models\Report;
use Livewire\Component;

class ReportForum extends Component
{
    public $report;
    public $forum;
    public function mount($id){
       $this->report = Report::find($id);
       if (!$this->report) {
           return redirect()->route('report');
       }
       $this->forum = Forum::find($this->report->forum_id);

       if (!$this->forum) {
           // If the forum post is already deleted, we might want to delete the report too
           // or just inform the user. For now, let's just redirect back to reports.
           $this->report->delete();
           return redirect()->route('report')->with('delete', 'Forum post no longer exists. Report has been removed.');
       }
    }
    public function delete($id){
        $forum = Forum::find($id);
        if ($forum) {
            $forum->delete();
        }

        if ($this->report) {
            $this->report->delete();
        }

        session()->flash('delete', 'Report and forum post deleted successfully.');
        return redirect()->route('report');
    }
    public function render()
    {

        return view('livewire.report-forum');
    }
}
