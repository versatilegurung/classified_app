<?php

namespace App\Livewire\Frontend\Inc;

use Livewire\Component;

class Search extends Component
{

    public $query = '';    
  
    public function updatedSearchTerm()
    {
        $this->emit('query', $this->query);
    }

    public function render()
    {       
        return view('livewire.frontend.inc.search');
    }
}
