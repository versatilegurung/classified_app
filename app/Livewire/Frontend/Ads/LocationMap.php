<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;

class LocationMap extends Component
{
    public $lat = -25.344;
    public $lng = 131.031;

    public function render()
    {
        return view('livewire.frontend.ads.location-map');
    }
}
