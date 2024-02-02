<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class ResponsiveMenu extends Component
{

    public bool $showDrawer = false;
    
    public function render()
    {
        return view('livewire.frontend.responsive-menu');
    }

    
}
