<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\News;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateNews extends Component implements HasForms
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
                    ]),
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

            News::create($this->form->getState());
        }else{

            $news = $this->form->getState();
            $course_id = Auth::user()->course;
            $course = Course::where('id', $course_id)->first();
            $data = [
                'user_id' => $news['user_id'],
                'course' => $course->course,
                'image' => $news['image'],
                'post' => $news['post'],
                'status' => $news['status'],
            ];
            News::create($data);
        }
        session()->flash('save', 'News saved successfully.');
        return redirect()->route('news');
    }
    public function render()
    {
        return view('livewire.create-news');
    }
}
