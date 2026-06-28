<?php

namespace App\Livewire;

use App\Models\Event as ModelsEvent;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\Url;
class Event extends Component
{
    #[url(keep: true)]
    public $search = '';
    public $amount = 5;

    public function loadMore()
    {
        $this->amount += 5;
    }

    public function delete($id)
    {
        $event = ModelsEvent::findOrFail($id);
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
        $query = ModelsEvent::where('status', '=', 'public')
            ->when($this->search, function ($query) {
                $query->where('post', 'like', "%{$this->search}%");
            });

        $totalEvents = $query->count();
        $events = $query->latest()->take($this->amount)->get();

        return view('livewire.event', [
            'events' => $events,
            'hasMore' => $totalEvents > $this->amount,
        ]);
    }
}
