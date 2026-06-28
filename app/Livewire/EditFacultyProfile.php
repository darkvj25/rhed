<?php

namespace App\Livewire;

use App\Models\Faculty;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditFacultyProfile extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $image;
    public function mount($id): void
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        $faculty = Faculty::findOrFail($id);
        $this->image = $faculty->image;
        $this->form->fill($faculty->toArray());
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id'),
                FileUpload::make('image')
                    ->image()
                    ->directory('facultyImage')
                    ->required(),
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('position')
                    ->required(),

                // ...
            ])
            ->statePath('data');
    }
    public function update()
    {
        $validatedData = $this->form->getState();
        $faculty = Faculty::findOrFail($validatedData['id']);
        $imageData =  $validatedData['image'];

        if ($faculty->image && $this->image !== $imageData) {
            Storage::disk('public')->delete($faculty->image);
        }

        $faculty->update($validatedData);
        session()->flash('update', 'faculty updated successfully.');
        return redirect()->route('faculty');
    }

    public function render()
    {
        return view('livewire.edit-faculty-profile');
    }
}
