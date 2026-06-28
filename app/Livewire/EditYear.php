<?php

namespace App\Livewire;

use App\Models\Year;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class EditYear extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $image;
    public $id;
    public function mount($id): void
    {

    $year = Year::findOrFail($id);
    $this->id = $year->course_id;
    $this->form->fill($year->toArray());
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id'),
                Hidden::make('course_id'),
                TextInput::make('year')
                    ->required(),
            ])
            ->statePath('data');
    }
    public function update()
    {
        $validatedData = $this->form->getState();
        $year = Year::findOrFail($validatedData['id']);
        $year->update($validatedData);
        session()->flash('update', 'Year updated successfully.');
        return redirect()->route('year',['id' => $validatedData['course_id']]);
    }
    public function render()
    {
        return view('livewire.edit-year');
    }
}
