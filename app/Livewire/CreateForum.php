<?php

namespace App\Livewire;

use App\Models\BadComment;
use App\Models\Course;
use App\Models\Forum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateForum extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public function mount(): void
    {
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),
                FileUpload::make('image')
                    ->image()
                    ->directory('newsImage'),
                RichEditor::make('post')
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
                            $set('post', '');
                            session()->flash('error', 'Your post contains inappropriate language.');
                        }

                    }),
                Select::make('year')
                    ->options([
                        '1st year' => '1st year',
                        '2nd year' => '2nd year',
                        '3rd year' => '3rd year',
                        '4th year' => '4th year',
                    ])
                    ->required(),
                Select::make('status')
                    ->label('Who can view your post?')
                    ->options([
                        'private' => 'Private',
                        'public' => 'Public',
                    ])
                    ->required(),



                // ...
            ])
            ->statePath('data');
    }

    public function create()
    {

        if(Auth::user()->course === null){
            Forum::create($this->form->getState());
        }else{

            $forum = $this->form->getState();
            $course_id = Auth::user()->course;
            $course = Course::where('id', $course_id)->first();

            $data = [
                'user_id' => $forum['user_id'],
                'course' => $course->course,
                'image' => $forum['image'],
                'post' => $forum['post'],
                'year' => $forum['year'],
                'status' => $forum['status'],
            ];
            Forum::create($data);
        }


        session()->flash('save', 'News saved successfully.');
        return redirect()->route('forum');
    }
    public function render()
    {
        return view('livewire.create-forum');
    }
}
