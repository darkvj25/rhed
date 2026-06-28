<?php
namespace App\Livewire\Auth;


use App\Models\Block;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use App\Models\Year;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Url;

class Register extends Component implements HasForms
{
    use InteractsWithForms;


    public ?array $data = [];
    #[url]
    public $selected ='';

    public function mount(): void
    {
        $this->form->fill();

    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('id_number')
                ->label('ID Number')
                ->required()
                ->unique(User::class, 'id_number'),
                TextInput::make('name')
                ->label('Username')
                ->autocapitalize('words')
                ->required(),
                TextInput::make('email')
                ->email()
                ->unique(User::class, 'email')
                ->suffixIcon('heroicon-o-at-symbol')
                ->required(),
                TextInput::make('first_name')
                ->autocapitalize('Words')
                ->required(),
                TextInput::make('last_name')
                ->autocapitalize('Words')
                ->required(),
                Select::make('gender')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                ])
                ->required(),
                Select::make('course')
                    ->options(Course::all()->pluck('course', 'id'))
                    ->dehydrated()
                    ->reactive()
                    ->required(),
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
                    ->required(),

                Select::make('block')
                    ->options(function (callable $get) {
                        $yearId = $get('year');

                        if ($yearId) {
                           return Block::where('year_id', $yearId)->pluck('block', 'id');
                        }
                        return [];
                    })
                    ->reactive()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->revealable()
                    ->required()
                    ->minLength(8),
                TextInput::make('confirm_password')
                    ->password()
                    ->revealable()
                    ->required()
                    ->same('password')
                    ->validationMessages([
                        'same' => 'The passwords do not match.',
                    ]),
            ])
            ->statePath('data');
    }
    public function create()
    {
        try {
            $credential = $this->form->getState();

            $user = User::create([
                'id_number' => $credential['id_number'],
                'name' => $credential['name'],
                'email' => $credential['email'],
                'first_name' => $credential['first_name'],
                'last_name' => $credential['last_name'],
                'gender' => $credential['gender'],
                'course' => $credential['course'],
                'year' => $credential['year'],
                'block' => $credential['block'],
                'password' => Hash::make($credential['password']),
            ]);

            Auth::login($user);
            return redirect()->intended('/');
        } catch (\Illuminate\Validation\ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            $this->addError('id_number', 'An error occurred. Please ensure you have run the migrations: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
