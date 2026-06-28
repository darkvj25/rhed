<?php

namespace App\Livewire\Auth;

use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

use function Laravel\Prompts\error;

class Login extends Component implements HasForms
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

                TextInput::make('email')
                ->email()
                ->exists()
                ->suffixIcon('heroicon-o-at-symbol')
                ->required(),
                TextInput::make('password')
                ->password()
                ->revealable(),


                // ...
            ])
            ->statePath('data');
    }
    public function create()
    {
        $data = $this->form->getState();

        $credentials = [
            'email' => $data['email'],
            'password' => $data['password'],
        ];

        if (Auth::attempt($credentials)) {
            // Successful login
            session()->regenerate();
            return redirect()->intended('/');
        }
        // Handle failed login
        $this->addError('email', 'Invalid credentials.');


    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
