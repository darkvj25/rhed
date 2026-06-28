<?php

namespace App\Livewire;

use App\Models\Block;
use App\Models\Course;
use App\Models\Student;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use App\Models\User;
use App\Models\Year;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
class EditProfile extends Component implements HasForms
{
    use WithFileUploads;
    use InteractsWithForms;

    public ?array $data = [];

    public $image;
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';
    public function mount(){

        $user = User::findOrFail(Auth::user()->id);
        $this->image = $user->image;
        $this->form->fill($user->toArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\Grid::make(2)
                    ->schema([
                        FileUpload::make('image')
                            ->label('Profile Picture')
                            ->image()
                            ->avatar()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('profile-photos')
                            ->preserveFilenames()
                            ->columnSpanFull()
                            ->extraAttributes(['class' => 'mx-auto']),

                        Hidden::make('id'),

                        TextInput::make('name')
                            ->label('Username')
                            ->required()
                            ->prefixIcon('heroicon-m-user')
                            ->columnSpan(1),

                        TextInput::make('id_number')
                            ->label('ID Number')
                            ->visible(fn() => Auth::user()->role === 'student')
                            ->disabled()
                            ->dehydrated()
                            ->prefixIcon('heroicon-m-identification')
                            ->columnSpan(1),

                        TextInput::make('first_name')
                            ->label('First Name')
                            ->visible(fn() => Auth::user()->first_name != null)
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('last_name')
                            ->label('Last Name')
                            ->visible(fn() => Auth::user()->first_name != null)
                            ->required()
                            ->columnSpan(1),

                        Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                            ])
                            ->required()
                            ->native(false)
                            ->columnSpanFull(),

                        \Filament\Forms\Components\Section::make('Academic Details')
                            ->description('Your course and year information')
                            ->visible(fn() => Auth::user()->role === 'student')
                            ->compact()
                            ->columns(3)
                            ->schema([
                                Select::make('course')
                                    ->options(Course::all()->pluck('course', 'id'))
                                    ->dehydrated()
                                    ->reactive()
                                    ->required()
                                    ->native(false),

                                Select::make('year')
                                    ->options(function (callable $get) {
                                        $courseId = $get('course');
                                        if ($courseId) {
                                            return Year::where('course_id', $courseId)->pluck('year', 'id');
                                        }
                                        return [];
                                    })
                                    ->reactive()
                                    ->dehydrated()
                                    ->required()
                                    ->native(false),

                                Select::make('block')
                                    ->options(function (callable $get) {
                                        $yearId = $get('year');
                                        if ($yearId) {
                                           return Block::where('year_id', $yearId)->pluck('block', 'id');
                                        }
                                        return [];
                                    })
                                    ->reactive()
                                    ->required()
                                    ->native(false),
                            ]),
                    ])
            ])
            ->statePath('data');
    }
    public function update(){
        $validatedData = $this->form->getState();
        $user = User::findOrFail($validatedData['id']);
        $imageData =  $validatedData['image'];

        // if ($this->image !== $imageData) {
        //     Storage::disk('public')->delete($user->image);
        // }
        $user->update($validatedData);
        $student_id = Student::where('user_id', $validatedData['id'])->first();
         if($student_id != null){
            $data = [
                'id_number' => $validatedData['id_number'],
                'course_id' => $validatedData['course'],
                'year_id' => $validatedData['year'],
                'block_id' => $validatedData['block'],
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'gender' => $validatedData['gender'],
            ];
            Student::updateOrCreate(
                ['user_id' => $validatedData['id']],
                $data
            );

         }

        session()->flash('save', 'Profile updated successfully.');
        return redirect()->route('editProfile');
    }
    public function updatePassword(){
        try {
            $validated = $this->validate([
                'current_password' => ['required', 'string', 'current_password'],
                'password' => ['required', 'string', Password::defaults(), 'confirmed'],
            ]);
        } catch (ValidationException $e) {
            $this->reset('current_password', 'password', 'password_confirmation');

            throw $e;
        }

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $this->reset('current_password', 'password', 'password_confirmation');

        $this->dispatch('password-updated');
    }

    public function deleteUser()
    {
        $this->validate([
            'password' => ['required', 'string', 'current_password'],
        ]);

        $user = Auth::user();

        Auth::logout();

        $user->delete();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.edit-profile');
    }
}
