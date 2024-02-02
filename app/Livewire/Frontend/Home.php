<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Butschster\Head\Facades\Meta;

class Home extends Component
{
    
    public function render()
    {      
        Meta::prependTitle('Homepage')
            ->setFavicon('favicon-index.ico');

        return view('livewire.frontend.home');
    }
}
