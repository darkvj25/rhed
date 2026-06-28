<?php

namespace App\Livewire;

use App\Models\Block;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class EditBlock extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $id;
    public $year_id;
    public function mount($id): void
    {
    
    $year = Block::findOrFail($id);
    $this->id = $year->course_id;
    
    $this->year_id = $year->year_id;
    $this->form->fill($year->toArray());
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id'),
                Hidden::make('year_id'),
                Hidden::make('course_id'),
                TextInput::make('block')
                    ->required(),
            ])
            ->statePath('data');
    }
    public function update()
    {
        $validatedData = $this->form->getState();
        $block = Block::findOrFail($validatedData['id']);
        $block->update($validatedData);
        session()->flash('update', 'block updated successfully.');
        return redirect()->route('block',['id' => $validatedData['year_id']]);
    }
    public function render()
    {
        return view('livewire.edit-block');
    }
}
