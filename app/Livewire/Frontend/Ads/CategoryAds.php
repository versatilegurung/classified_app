<?php

namespace App\Livewire\Frontend\Ads;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;

class CategoryAds extends Component
{
    public $category;

    public function mount($slug)
    {
        $this->category = Category::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        $ads = Ad::where('category_id', $this->category->id)
            ->where('published', true)
            ->where('expires_at', '>', now())
            ->get();
        return view(
            'livewire.frontend.ads.category-ads',
            [
                'ads' => $ads
            ]
        );
    }
}
