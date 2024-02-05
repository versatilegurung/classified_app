<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Butschster\Head\Facades\Meta;

#[Layout('layouts.app')]
class Register extends Component
{

    public function render()
    {
        Meta::prependTitle('Register');

        return view('livewire.frontend.auth.register');
    }
}
