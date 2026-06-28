<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;

class DepartmentEvent extends Component
{
    public $event_course;
    #[Url(keep: true)]
    public $search = '';
    public $amount = 5;

    public function loadMore()
    {
        $this->amount += 5;
    }

    public function mount()
    {
        $course_id = Auth::user()->course;
        $course = Course::where('id', $course_id)->first();
        if ($course) {
            $this->event_course = $course->course;
        }
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if ($event->image) {
            Storage::disk('public')->delete($event->image);
        }

        $event->delete();

        session()->flash('delete', 'Event deleted successfully.');
        $this->redirectRoute('event');
    }

    public function searchAll()
    {
        $this->amount = 5;
    }

    public function render()
    {
        $query = Event::where('status', '=', 'private')
            ->where('course', $this->event_course)
            ->when($this->search, function ($query) {
                $query->where('post', 'like', "%{$this->search}%");
            });

        $totalEvents = $query->count();
        $events = $query->latest()->take($this->amount)->get();

        return view('livewire.department-event', [
            'events' => $events,
            'hasMore' => $totalEvents > $this->amount,
        ]);
    }
}
