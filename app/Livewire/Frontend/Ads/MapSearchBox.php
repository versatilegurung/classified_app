<?php

namespace App\Livewire\Frontend\Ads;

use App\Http\Services\GoogleLocationEncoder; // Import the missing class

use Livewire\Component;

class MapSearchBox extends Component
{
    public $address;

    public function search()
    {
        // Use a custom service to get address' lat-long coordinates
        // Either through Google GeoCoder or some other translator
        $coordinates = new GoogleLocationEncoder( // Use the imported class
            $this->address
        );
    }

    public function render()
    {
        return view('livewire.frontend.ads.map-search-box');
    }
}
