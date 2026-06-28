<?php

namespace App\Livewire;

use App\Models\News;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EditNews extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $image;
    public function mount($id): void
    {

    $news = News::findOrFail($id);
    $this->image = $news->image;
    $this->form->fill($news->toArray());
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
                    ->directory('newsImage')
                    ->preserveFilenames()
                    ->default($this->image),
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
            $news = News::findOrFail($validatedData['id']);
            $imageData =  $validatedData['image'];

            if ($this->image !== $imageData) {
                Storage::disk('public')->delete($news->image);
            }
    $news->update($validatedData);
    session()->flash('update', 'News updated successfully.');
    return redirect()->route('news-settings');
}


    public function render()
    {
        return view('livewire.edit-news');
    }
}
