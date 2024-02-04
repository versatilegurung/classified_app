<?php

namespace App\Livewire\Frontend\Ads;


use Livewire\Component;
use App\Models\Category;

class PostAd extends Component
{
    public $categories;
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.frontend.ads.post-ad');
    }
}
