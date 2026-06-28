<?php

namespace App\Livewire;

use App\Models\BadComment;
use App\Models\Comment;
use App\Models\ReplyComment as ModelsReplyComment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Illuminate\Support\Str;
class ReplyComment extends Component
{
    public $comment;
    public $user;
    public $reply;
    public $allReply;
    public $commentTime;
    public $id;
    public function mount($id){
        $this->id = $id;
        $this->comment = Comment::where('id', $id)->first();
        $this->commentTime = Carbon::parse($this->comment->created_at);
        $this->user = $this->comment->user;
        $this->allReply = $this->comment->reply;

    }
    public function create(){

        $data = [
            'user_id' => Auth::user()->id,
            'comment_id' => $this->comment->id,
            'reply' => $this->reply,
        ];
        $badWords = BadComment::pluck('comment')->toArray();
        $comment = $data['reply'];
        $containsBadWord = false;

        foreach ($badWords as $badWord) {
            if (Str::contains(strtolower($comment), strtolower($badWord))) {
                $containsBadWord = true;
                break;
            }
        }

        // Handle bad words case
        if ($containsBadWord) {
            $this->reply = '';
            session()->flash('error', 'Your comment contains inappropriate language.');
            $this->redirectRoute('reply-comment', ['id' => $this->comment->id]);
        } else {
            ModelsReplyComment::create($data);
            $this->redirectRoute('reply-comment', ['id' => $this->comment->id]);
        }

    }
    public function focusReplyInput()
    {

        $this->dispatch('focus-reply-input');
    }
    public function render()
    {
        return view('livewire.reply-comment');
    }
}
