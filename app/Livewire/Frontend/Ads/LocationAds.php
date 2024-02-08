<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;

class LocationAds extends Component
{

    public $slug;
    public $ads;

    public function mount($slug)
    {
        $this->slug = $slug;
        dd($this->slug);
        // find ads by location
        $this->ads = \App\Models\Location::where('slug', $this->slug)->first();
        $this->ads = \App\Models\Ad::where('location', $this->ads->location->slug)->paginate(10);
    }

    public function render()
    {
        return view('livewire.frontend.ads.location');
    }
}
