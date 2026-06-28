<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class ConfirmCode extends Component
{
    public $email;
    public $code1;
    public $code2;
    public $code3;
    public $code4;
    public $code5;
    public $code6;
    public function mount($email)
    {
        $this->email = $email;

    }

    public function verifyCode()
    {
        // Combine the individual code inputs into one string
        $enteredCode = $this->code1 . $this->code2 . $this->code3 . $this->code4 . $this->code5 . $this->code6;

        // Find the user by email
        $user = User::where('email', $this->email)->first();

        if ($user && $user->reset_code == $enteredCode) {
            return redirect()->route('create-new-password', ['email' => $this->email]);
        } else {
            session()->flash('error', 'Invalid code. Please try again.');
        }
    }
    public function render()
    {
        return view('livewire.auth.confirm-code');
    }
}
