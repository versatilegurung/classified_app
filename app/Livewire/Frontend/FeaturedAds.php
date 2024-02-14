<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class FeaturedAds extends Component
{
    //get ads from database
    public $ads;

    public function mount()
    {
        //get ads or fail
        $this->ads = \App\Models\Ad::where('featured', true)->where('published', true)->where('expires_at', '>', now())->orderBy('id', 'desc')->limit(8)->get();
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
