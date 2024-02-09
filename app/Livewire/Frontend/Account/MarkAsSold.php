<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Ad;
use Livewire\Component;

class MarkAsSold extends Component
{
    public $adId;
    public $ad;

    // public function mount($adId)
    // {
    //     $this->adId = $this->adId;
    // }

    public function markAsSold()
    {
        $this->ad = Ad::find($this->adId);
        $this->ad->is_sold = true;
        $this->ad->published = false;
        $this->ad->save();

        session()->flash('message', 'Ad marked as sold successfully');

        //send a message to the user

        // dd($this->ad->is_sold);
    }


    public function render()
    {
        $is_sold = Ad::find($this->adId)->is_sold;

        return view(
            'livewire.frontend.account.mark-as-sold',
            [
                'is_sold' => $is_sold
            ]
        );
    }
}
