<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class LocationList extends Component
{
    public $locations;

    public function mount()
    {
        $this->locations = \App\Models\Location::all();

        //get random categories
        $this->locations = $this->locations->shuffle();


        //count the number of ads in each category
        foreach ($this->locations as $location) {
            $location->ads_count = \App\Models\Ad::where('location_id', $location->id)->count();
        }
    }

    public function render()
    {

        return view(
            'livewire.frontend.location-list',
            [
                'locations' => $this->locations
            ]
        );
    }
}
