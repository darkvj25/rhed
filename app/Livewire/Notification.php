<?php

namespace App\Livewire;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notification extends Component
{
    public $user;
    public $forums;

    public function mount(){
        $this->user = User::where('id', Auth::user()->id)->first();
        $this->forums = Forum::where('user_id', Auth::user()->id)->get();
    }

    public function render()
    {
        return view('livewire.notification');
    }
}
