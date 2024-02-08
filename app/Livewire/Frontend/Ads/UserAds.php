<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;

class UserAds extends Component
{

    public $ads;
    public $userId;

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->ads = \App\Models\Ad::where('user_id', $userId)->get();
    }

    public function render()
    {
        return view('livewire.frontend.ads.ads-by-user');
    }
}
