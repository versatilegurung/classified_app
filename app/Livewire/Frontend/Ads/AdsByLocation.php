<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;
use App\Models\District;

class AdsByLocation extends Component
{
    public $districts;

    public function mount()
    {
        $this->districts = \App\Models\District::all();

        //get random categories
        $this->districts = $this->districts->shuffle();


        //count the number of ads in each category
        foreach ($this->districts as $district) {
            $district->ads_count = \App\Models\Ad::where('district_id', $district->id)->where('published', true)->where('expires_at', '>', now())->count();
        }
    }

    public function render()
    {
        return view(
            'livewire.frontend.ads.ads-by-location',
            [
                'districts' => $this->districts
            ]
        );
    }
}
