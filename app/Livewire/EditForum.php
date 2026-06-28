<?php

namespace App\Livewire;
use App\Models\BadComment;
use App\Models\Forum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;

class EditForum extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $image;
    public function mount($id): void
    {
        $forum = Forum::findOrFail($id);
        $this->image = $forum->image;
        $this->form->fill($forum->toArray());
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('id'),
                Hidden::make('user_id'),
                FileUpload::make('image')
                    ->image()
                    ->directory('newsImage'),
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
                    ])
                    ->afterStateUpdated(function ($state,$set){
                        $badWords = BadComment::pluck('comment')->toArray(); // Retrieve bad words as an array
                        $containsBadWord = false;
                        $lower = strtolower($state);
                        foreach ($badWords as $badWord) {
                            if (Str::contains($lower, $badWord)) {
                                $containsBadWord = true;
                                break;
                            }
                        }

                        if ($containsBadWord) {
                            $set('post', '');
                            session()->flash('error', 'Your post contains inappropriate language.');
                        }

                    }),
                    Select::make('year')
                    ->options([
                        '1st year' => '1st year',
                        '2nd year' => '2nd year',
                        '3rd year' => '3rd year',
                        '4th year' => '4th year',
                    ])
                    ->required(),
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
        $events = Forum::findOrFail($validatedData['id']);
        $imageData =  $validatedData['image'];

            if ($events->image && $this->image !== $imageData) {
                Storage::disk('public')->delete($events->image);
            }

        $events->update($validatedData);
        session()->flash('update', 'Post updated successfully.');
        return redirect()->route('forum');
    }
    public function render()
    {
        return view('livewire.edit-forum');
    }
}
