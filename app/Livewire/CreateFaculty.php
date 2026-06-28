<?php

namespace App\Livewire;

use App\Models\Faculty;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateFaculty extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public function mount(): void
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->circleCropper()
                    ->directory('facultyImage')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('position')
                    ->required(),


            ])
            ->statePath('data');
    }

    public function create()
    {
        Faculty::create($this->form->getState());

        session()->flash('save', 'Faculty saved successfully.');
        return redirect()->route('event');
    }
    public function render()
    {
        return view('livewire.create-faculty');
    }
}
