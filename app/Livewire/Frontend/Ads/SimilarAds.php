<?php

namespace App\Livewire\Frontend\Ads;

use App\Models\Ad;
use Livewire\Component;

class SimilarAds extends Component
{
    public $ad;

    public function mount($adId)
    {
        $this->ad = Ad::findOrFail($adId);
    }

    public function render()
    {
        $similarPosts = Ad::where('category_id', $this->ad->category_id)
            ->where('id', '<>', $this->ad->id)
            ->inRandomOrder()
            ->take(5) // Adjust the number of similar posts you want to display
            ->get();


        return view('livewire.frontend.ads.similar-ads', [
            'similarPosts' => $similarPosts
        ]);
    }
}
