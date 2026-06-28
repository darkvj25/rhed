<?php

namespace App\Livewire;

use App\Models\BadComment;
use App\Models\Comment as ModelsComment;
use App\Models\Forum;
use App\Models\Like;
use App\Models\Notification;
use Carbon\Carbon;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
class Comment extends Component implements HasForms
{
    public $post;
    public $user;
    public $comments;
    public $user_comment;
    public $text;
    public $id;
    public $isLiked;
    public $forumTime;
    use InteractsWithForms;

    public ?array $data = [];
    public function mount($id){
        $this->id = $id;
        $this->post = Forum::where('id', $id)->first();//forum post
        $this->user = $this->post->user;//user that post
        $this->comments = $this->post->comments;//all comments
        $this->forumTime = Carbon::parse($this->post->created_at);
        $this->form->fill();


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
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),
                Hidden::make('forum_id')
                    ->default(fn() => $this->post->id),
                RichEditor::make('comment')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'bulletList',
                        'h2',
                        'h3',
                        'italic',
                        'orderedList',
                        'strike',
                        'underline',
                    ])
                    ->afterStateUpdated(function ($state,$set){
                        $badWords = BadComment::pluck('comment')->toArray(); // Retrieve bad words as an array
                        $containsBadWord = false;
                        $lower = strtolower($state);
                        foreach ($badWords as $badWord) {
                            if (Str::contains($lower, $badWord)) {
                                $containsBadWord = true;
                                break;
                            }
                        }

                        if ($containsBadWord) {

                            $set('comment', '');
                            session()->flash('error', 'Your comment contains inappropriate language.');
                        }

                    }),

                // ...
            ])
            ->statePath('data');
    }


    public function create()
    {

         $data = $this->form->getState();

        ModelsComment::create($data);
        Notification::create([
            'user_id' =>Auth::user()->id,
            'forum_id' => $data['forum_id'],
            'notification' => Auth::user()->name.' '.'comment to your post',
        ]);
        session()->flash('save', 'News saved successfully.');
        $this->redirectRoute('comment', ['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.comment');
    }
}
