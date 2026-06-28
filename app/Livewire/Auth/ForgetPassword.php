<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use App\Notifications\ResetPasswordCode;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ForgetPassword extends Component implements HasForms
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
                // ...
            ])
            ->statePath('data');
    }
    public function sendResetCode()
    {
        $request = $this->form->getState();
        $user = User::where('email', $request['email'])->first();

        if ($user) {
            $code = mt_rand(100000, 999999); // Generate a random 6-digit code
            $user->update(['reset_code' => $code]);

            // Send the notification
            Notification::send($user, new ResetPasswordCode($code));

            session()->flash('message', 'A reset code has been sent to your email.');
            $this->redirectRoute('confirm-code',['email' => $user->email]);
        } else {
            session()->flash('error', 'Email address not found.');
            $this->redirectRoute('forget-password');

        }
    }
    public function render()
    {
        return view('livewire.auth.forget-password');
    }
}
