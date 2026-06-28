<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Request extends Component
{
    public $users;

    public function mount(){
        $this->users = User::query()->where('accept',0)->get();
    }
    public function render()
    {
        return view('livewire.request');
    }
}
