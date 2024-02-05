<?php

namespace App\Livewire\Frontend\Auth;
use Butschster\Head\Facades\Meta;

use Livewire\Component;

class ForgotPassword extends Component
{
    public function render()
    {
        Meta::prependTitle('Forgot your password?');

        return view('livewire.frontend.auth.forgot-password');
    }
}
