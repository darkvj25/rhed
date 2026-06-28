<?php

namespace App\Livewire;

use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ReportNotification extends Component
{
    public $lastReportId;

    public function mount()
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            $lastReport = Report::latest()->first();
            $this->lastReportId = $lastReport ? $lastReport->id : 0;
        }
    }

    public function checkForNewReports()
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return;
        }

        $newReport = Report::where('id', '>', $this->lastReportId)->latest()->first();

        if ($newReport) {
            $this->lastReportId = $newReport->id;

            $this->dispatch('new-report-received', [
                'id' => $newReport->id,
                'reason' => $newReport->reason,
                'user' => $newReport->user ? $newReport->user->name : 'Unknown'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.report-notification');
    }
}
