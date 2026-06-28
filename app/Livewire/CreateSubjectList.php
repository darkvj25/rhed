<?php

namespace App\Livewire;

use App\Models\SubjectList;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateSubjectList extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public $course_id;
    public function mount($id): void
    {
        $this->course_id = $id;
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                    Select::make('year')
                        ->options([
                            '1st year' => '1st year',
                            '2nd year' => '2nd year',
                            '3rd year' => '3rd year',
                            '4th year' => '4th year',
                        ])
                        ->required(),
                    Hidden::make('course_id')
                    ->default($this->course_id),
                    TextInput::make('subject_code')
                        ->required(),
                    TextInput::make('description')
                        ->required(),
                    TextInput::make('unit')
                        ->required(),


            ])
            ->statePath('data');
    }

    public function create()
    {
        SubjectList::create($this->form->getState());

        session()->flash('save', 'Subject saved successfully.');
        return $this->redirectRoute('subject-list',['id' => $this->course_id]);
    }
    public function render()
    {
        return view('livewire.create-subject-list');
    }
}
