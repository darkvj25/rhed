<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class RegisterFaculty extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public function mount(): void
    {
        $this->form->fill();

    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
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
                TextInput::make('position')
                ->autocapitalize('Words')
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
    public function createData()
    {
        try {
            $credential = $this->form->getState();

            $user = User::create([
                'name' => $credential['name'],
                'email' => $credential['email'],
                'first_name' => $credential['first_name'],
                'last_name' => $credential['last_name'],
                'role' => 'faculty',
                'position' => $credential['position'],
                'password' => Hash::make($credential['password']),
            ]);

            Auth::login($user);
            return redirect()->intended('/');
        } catch (\Illuminate\Validation\ValidationException $e) {
            throw $e;
        } catch (\Exception $e) {
            $this->addError('name', 'An error occurred during registration: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.auth.register-faculty');
    }
}
