<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Event;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateEvent extends Component implements HasForms
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
                    ->imageEditor()
                    ->directory('eventImage')
                    ->required(),
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
            Event::create($this->form->getState());
        }else{

            $event = $this->form->getState();
            $course_id = Auth::user()->course;
            $course = Course::where('id', $course_id)->first();

            $data = [
                'user_id' => $event['user_id'],
                'course' => $course->course,
                'image' => $event['image'],
                'post' => $event['post'],
                'status' => $event['status'],
            ];
            Event::create($data);
        }
        session()->flash('save', 'Event saved successfully.');
        return redirect()->route('event');
    }
    public function render()
    {
        return view('livewire.create-event');
    }
}
