<?php

namespace App\Livewire;

use App\Models\Forum;
use App\Models\Like;
use App\Models\Notification;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\Attributes\Validate;

class ForumPost extends Component
{
    public $forum;
    public $user;
    public $isLiked;
    public $forumTime;
    #[Validate('required')]
    public $reason;
    public function mount($id){
        $this->forum = Forum::where('id', $id)->first();
        $this->user = User::where('id', $this->forum->user_id)->first();
        $this->forumTime = Carbon::parse($this->forum->created_at);


        $this->isLiked = Like::where('forum_id', $id)
            ->where('user_id', Auth::id())
            ->exists();

    }
    public function like($id){
        $like = Like::where('forum_id', $id)
                ->where('user_id', Auth::id())
                ->first();

        if ($like) {
            $like->delete();
            $this->isLiked = false;
        } else {
            $save = Like::create([
                'user_id' => Auth::id(),
                'forum_id' => $id,
                'like' => true
            ]);
             $this->isLiked = true;
            //  $forum_id = $save->forum_id;

            Notification::create([
                'user_id' =>Auth::user()->id,
                'forum_id' => $id,
                'notification' => Auth::user()->name.' '.'react to your post',
            ]);
        }
    }
    public function delete($id){
        $delete = Forum::findOrFail($id);
        $delete->delete();
        session()->flash('delete', 'Post deleted successfully.');
        $this->redirectRoute('forum');
    }
    public function report($id){
        $this->validate([
            'reason' => 'required'
        ]);
        $data = [
            'forum_id' =>$id,
            'user_id' => Auth::user()->id,
            'reason' => $this->reason,
        ];

        Report::create($data);
        session()->flash('report', 'Report successfully sent.');
        return redirect()->route('forum');

    }
    public function render()
    {
        return view('livewire.forum-post');
    }
}
