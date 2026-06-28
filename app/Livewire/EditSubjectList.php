<?php

namespace App\Livewire;

use App\Models\SubjectList;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class EditSubjectList extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $course_id;
    public function mount($id): void
    {

    $subject_list = SubjectList::findOrFail($id);
    $this->course_id =$subject_list->course_id;
    $this->form->fill($subject_list->toArray());
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id'),
                Select::make('year')
                ->options([
                    '1st year' => '1st year',
                    '2nd year' => '2nd year',
                    '3rd year' => '3rd year',
                    '4th year' => '4th year',
                ])
                ->required(),
                Hidden::make('course_id'),
                TextInput::make('subject_code')
                    ->required(),
                TextInput::make('description')
                    ->required(),
                TextInput::make('unit')
                    ->required(),

                // ...
            ])
            ->statePath('data');
    }

    public function update()
    {
            $validatedData = $this->form->getState();
            $subject_list = SubjectList::findOrFail($validatedData['id']);
            $subject_list->update($validatedData);
            session()->flash('update', 'subject_list updated successfully.');
            return redirect()->route('subject-list',['id'=>$this->course_id]);
    }


    public function render()
    {
        return view('livewire.edit-subject-list');
    }
}
