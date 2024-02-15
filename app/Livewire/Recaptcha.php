<?php

namespace App\Livewire;

use Livewire\Component;

class Recaptcha extends Component
{
    public $action;

    public function render()
    {
        return view('livewire.recaptcha');
    }
}
