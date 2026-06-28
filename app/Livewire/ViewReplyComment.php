<?php

namespace App\Livewire;

use App\Models\ReplyComment;
use Carbon\Carbon;
use Livewire\Component;
class ViewReplyComment extends Component
{
    public $reply;
    public $commentTime;
    public function mount($id){
       $this->reply = ReplyComment::where('id', $id)->first();
       $this->commentTime = Carbon::parse($this->reply->created_at);
    }
    public function render()
    {
        return view('livewire.view-reply-comment');
    }
}
