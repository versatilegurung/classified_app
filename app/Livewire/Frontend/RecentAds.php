<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class RecentAds extends Component
{
    public $ads;
    public function mount()
    {
        $this->ads = \App\Models\Ad::orderBy('id', 'desc')->limit(10)->get();
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
