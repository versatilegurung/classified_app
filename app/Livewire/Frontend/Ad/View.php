<?php

namespace App\Livewire\Frontend\Ad;

use Livewire\Component;

class View extends Component
{
    public $ad;

    public function mount($slug)
    {
        $this->ad = \App\Models\Ad::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.frontend.ad.view');
    }
}
