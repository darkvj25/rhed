<?php

namespace App\Livewire\Auth;
use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CreateNewPassword extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $email;
    public function mount($email): void
    {
        $this->form->fill();
        $this->email = $email;

    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('password')
                ->password()
                ->revealable()
                ->required(),
                TextInput::make('password_confirmation')
                ->password()
                ->revealable()
                ->required(),
                // ...
            ])
            ->statePath('data');
    }
    public function ResetCode(){
        $credential = $this->form->getState();
        $user = User::where('email', $this->email)->first();
        if (!$user) {
            session()->flash('error', 'Invalid request to reset password. Please try again.');

        }

        if ($credential['password'] !== $credential['password_confirmation']) {
            session()->flash('error', 'Passwords do not match. Please try again.');
            $this->redirectRoute('create-new-password', ['email' => $user->email]);
        }

        if ($credential['password'] === $credential['password_confirmation']) {
        $user->update([
            'password' => Hash::make($credential['password']),
            'reset_code' => null,
        ]);
        return redirect()->route('login')->with('message', 'Password reset successfully. You can now log in.');
        }


    }
    public function render()
    {
        return view('livewire.auth.create-new-password');
    }
}
