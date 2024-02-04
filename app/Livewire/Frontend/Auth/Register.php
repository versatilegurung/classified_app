<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Register extends Component
{

    public function render()
    {
        return view('livewire.frontend.auth.register');
    }
}
