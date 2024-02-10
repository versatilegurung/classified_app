<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Ad;
use Livewire\Component;

class MyAds extends Component
{
    public $myads;

    public function mount()
    {
        $this->myads = Ad::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        //paginate the ads
        // $this->myads = Ad::where('user_id', auth()->user()->id)->paginate(5);
    }
    public function render()
    {
        return view('livewire.frontend.account.my-ads');
    }
}