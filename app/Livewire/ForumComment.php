<?php

namespace App\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;

class ForumComment extends Component
{
    public $comment;
    public $user;
    public $commentTime;
    public function mount($id){
        $this->comment = Comment::where('id', $id)->first();
        $this->commentTime = Carbon::parse($this->comment->created_at);
        $this->user = $this->comment->user;


    }
    public function render()
    {
        return view('livewire.forum-comment');
    }
}
