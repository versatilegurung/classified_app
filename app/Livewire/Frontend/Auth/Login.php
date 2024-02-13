<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;

use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email, $password;

    public $showPassword = false;

    public function toggleShowPassword()
    {
        $this->showPassword = !$this->showPassword;
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
    }

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

        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('livewire.frontend.auth.login');
    }
}
