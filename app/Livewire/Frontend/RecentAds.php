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
        $this->ads = \App\Models\Ad::orderBy('id', 'desc')->limit(10)->get();
        $adId = $this->ads->pluck('id');
        // dd($adId);
        $this->adThumbImage = \App\Models\AdImage::where('id', $adId)->first();
    }
    public function render()
    {
        return view(
            'livewire.frontend.recent-ads',
            [
                'ads' => $this->ads
            ]
        );
    }
}
