<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;

class LocationAds extends Component
{

    public $slug;
    public $ads;
    public $district;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->district = \App\Models\District::where('slug', $this->slug)->first();
        $this->ads = \App\Models\Ad::where('district_id', $this->district->id)->where('published', true)->where('expires_at', '>', now())->get();
    }

    public function render()
    {

        return view(
            'livewire.frontend.ads.location-ads',
            [
                'ads' => $this->ads
            ]
        );
    }
}
