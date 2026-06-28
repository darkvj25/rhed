<?php

namespace App\Livewire;

use App\Models\Year;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class CreateYear extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $id;
    public function mount($id): void
    {
       $this->id = $id;
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('course_id')
                    ->default(fn()=>$this->id),
               TextInput::make('year')
                ->unique(),
                // ...
            ])
            ->statePath('data');
    }

    public function create()
    {
        Year::create($this->form->getState());

        session()->flash('save', 'Year saved successfully.');
        return redirect()->route('year',['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.create-year');
    }
}
