<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;

class Dashboard extends Component
{
    //get user id
    public $user_id;
    public $ads;
    public $totalAds;
    public $totalMessages;
    public $totalViews;

    public function mount()
    {
        $this->ads = \App\Models\Ad::where('user_id', auth()->user()->id)->count();

        $this->totalAds = $this->ads;
    }

    public function render()
    {

        return view(
            'livewire.frontend.account.dashboard',
            [
                'ads' => $this->ads
            ]
        );
    }
}
