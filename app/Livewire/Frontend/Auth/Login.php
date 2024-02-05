<?php

namespace App\Livewire\Frontend\Auth;
use Butschster\Head\Facades\Meta;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        Meta::prependTitle('Login');

        return view('livewire.frontend.auth.login');
    }
}
