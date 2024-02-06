<?php

namespace App\Livewire\Frontend\Auth;
use Butschster\Head\Facades\Meta;

use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended(route('dashboard'));
        }

        $this->addError('email', 'These credentials do not match our records.');
    }

    public function render()
    {
        Meta::prependTitle('Login');

        return view('livewire.frontend.auth.login');
    }
}
