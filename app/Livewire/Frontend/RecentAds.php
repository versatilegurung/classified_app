<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class RecentAds extends Component
{
    public $ads;
    public $adThumbImage;
    public $adId;

    public function mount()
    {
        $this->ads = \App\Models\Ad::orderBy('id', 'desc')->where('published', true)->limit(10)->get();  
        $adId = $this->ads->first()->id;
        // dd($adId);             

        
    }
    public function render()
    {
        return view(
            'livewire.frontend.recent-ads',
            [
                'ads' => $this->ads,
                'adId' => $this->adId
            ]
        );
    }
}
