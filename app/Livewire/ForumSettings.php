<?php

namespace App\Livewire;

use App\Models\Forum;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;

class ForumSettings extends Component
{
    #[url]
    public $search ='';
    public $forums =[];


    public function mount(){

        if (empty($this->search)) {
            $this->forums = Forum::where('user_id','=',Auth::user()->id)
                                    ->orderBy('created_at', 'desc')->get();
        } else {
             $this->forums = Forum::where('post', 'like', "%{$this->search}%")
                                    ->orderBy('created_at', 'desc')->get();
        }

    }
    public function searchAll(){
        if (empty($this->search)) {
            $this->forums = Forum::where('user_id','=',Auth::user()->id)
                                        ->orderBy('created_at', 'desc')->get();
            $this->js('window.location.reload()');
        } else {
             $this->forums = Forum::where('post', 'like', "%{$this->search}%")
                                    ->where('user_id','=',Auth::user()->id)
                                    ->orderBy('created_at', 'desc')->get();
             $this->js('window.location.reload()');
        }
    }
    public function render()
    {
        return view('livewire.forum-settings');
    }
}
