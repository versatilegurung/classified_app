<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class FeaturedAds extends Component
{
    //get ads from database
    public $ads;

    public function mount()
    {
        $this->ads = \App\Models\Ad::where('featured', true)->inRandomOrder()->limit(8)->get();
    }
    public function render()
    {
        return view(
            'livewire.frontend.featured-ads',
            [
                'ads' => $this->ads
            ]
        );
    }
}
