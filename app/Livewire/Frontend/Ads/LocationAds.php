<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;

class LocationAds extends Component
{

    public $slug;
    public $ads;
    public $location;

    public function mount($slug)
    {
        $this->slug = $slug;
        // dd($this->slug);
        // find ads by location id
        $this->location = \App\Models\Location::where('slug', $this->slug)->first();
        $this->ads = \App\Models\Ad::where('location_id', $this->location->id)->get();
        
    }

    public function render()
    {

        return view('livewire.frontend.ads.location-ads',
            [
                'ads' => $this->ads
            ]);
    }
}
