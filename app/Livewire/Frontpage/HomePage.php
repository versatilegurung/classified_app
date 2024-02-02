<?php

namespace App\Livewire\Frontpage;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.frontpage.home-page')
            ->title('Home Page');
    }
}
