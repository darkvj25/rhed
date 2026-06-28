<?php

namespace App\Livewire;

use App\Models\Forum;
use Livewire\Attributes\Url;
use Livewire\Component;

class UserForumProfile extends Component
{
    public $forums;
    public $user;
    public $id;
    #[Url]
    public $search ='';
    public function mount($id){
        $this->id = $id;

        if (empty($this->search)) {
            $this->forums = Forum::where('user_id', $id)
                                ->where('status','=','public')->get();
                                $this->user = $this->forums->first()->user;
        } else {
             $this->forums = Forum::where('post', 'like', "%{$this->search}%")
                                        ->where('user_id', $id)
                                        ->where('status','=','public')->get();

        }

    }
    public function searchAll(){
        if (empty($this->search)) {
            $this->forums = Forum::where('user_id', $this->id)
                                ->where('status','=','public')->get();
            $this->js('window.location.reload()');
        } else {
            $this->forums = Forum::where('post', 'like', "%{$this->search}%")
                            ->where('user_id', $this->id)
                            ->where('status','=','public')->get();

             $this->js('window.location.reload()');
        }
    }
    public function render()
    {
        return view('livewire.user-forum-profile');
    }
}
