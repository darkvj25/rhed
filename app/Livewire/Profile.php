<?php

namespace App\Livewire;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $user ;
    public $admin;
    public $newMessagesCount;
    public function mount(){

        $this->user = User::where('id',Auth::user()->id)->first();

        $this->admin = User::where('course',$this->user->course)
                                ->where('role','=','admin')->first();
       $this->updateNewMessagesCount();
    }
    public function updateNewMessagesCount()
    {
        $this->newMessagesCount = Conversation::whereHas('message', function ($query) {
            $query->whereNull('read_at')
                  ->where('reciever_id', auth()->id());
        })->count();
    }
    public function render()
    {

        return view('livewire.profile');
    }
}
