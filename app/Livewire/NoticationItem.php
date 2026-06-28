<?php

namespace App\Livewire;

use App\Models\Notification;
use Livewire\Component;

class NoticationItem extends Component
{
    public $notifications=[];
    public function mount($id){
        $this->notifications = Notification::where('forum_id', $id)->get();

    }
    public function delete($id){
        $noty = Notification::findOrfail($id);
        $noty->delete();
        $this->redirectIntended('/notification');
    }
    public function render()
    {
        return view('livewire.notication-item');
    }
}
