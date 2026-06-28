<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public $user ;
    public function mount(){
        $this->user = User::where('id',Auth::user()->id)->first();

    }

    public function logout(){
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect('login');
    }
    public function render()
    {


        return view('livewire.home');
    }
}
