<?php

namespace App\Livewire;

use App\Models\Event;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditEvent extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $image;
    public function mount($id): void
    {
    $event = Event::findOrFail($id);
    $this->image = $event->image;
    $this->form->fill($event->toArray());
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id'), // Add the ID field to keep track of the record being edited
                Hidden::make('user_id')
                    ->default(fn() => Auth::id()),
                FileUpload::make('image')
                    ->image()
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

    public function update()
    {
        $validatedData = $this->form->getState();
        $events = Event::findOrFail($validatedData['id']);
        $imageData =  $validatedData['image'];

            if ($events->image && $this->image !== $imageData) {
                Storage::disk('public')->delete($events->image);
            }

        $events->update($validatedData);
        session()->flash('update', 'Event updated successfully.');
        return redirect()->route('event');
    }


    public function render()
    {
        return view('livewire.edit-event');
    }
}
