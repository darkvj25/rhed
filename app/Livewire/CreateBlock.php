<?php

namespace App\Livewire;

use App\Models\Block;
use App\Models\Year;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class CreateBlock extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $id;
    public $course_id;
    public function mount($id): void
    {
       $this->id = $id;
       $year = Year::where('id', $this->id)->first();
        $this->course_id = $year->course_id;
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('course_id')
                    ->default(fn()=>$this->course_id),
                Hidden::make('year_id')
                    ->default(fn()=>$this->id),
               TextInput::make('block'),
                // ...
            ])
            ->statePath('data');
    }

    public function create()
    {

        Block::create($this->form->getState());

        session()->flash('save', 'News saved successfully.');
        return redirect()->route('block',['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.create-block');
    }
}
