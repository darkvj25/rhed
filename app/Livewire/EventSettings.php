<?php

namespace App\Livewire;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;

class EventSettings extends Component
{
    public $events;
    #[Url(keep: true)]
    public $search = '';
    public function mount(){
        if (empty($this->search)) {
            $this->events = Event::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $this->events = Event::where('post', 'like', "%{$this->search}%")
                                    ->where('user_id', '=', Auth::user()->id)->get();
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
    public function searchAll(){

        if (empty($this->search)) {
            $this->events = Event::where('user_id', '=', Auth::user()->id)->get();
                            $this->js('window.location.reload()');
        } else {
            $this->events = Event::where('post', 'like', "%{$this->search}%")
                                    ->where('user_id', '=', Auth::user()->id)->get();
                            $this->js('window.location.reload()');

        }

    }
    public function render()
    {
        return view('livewire.event-settings');
    }
}
