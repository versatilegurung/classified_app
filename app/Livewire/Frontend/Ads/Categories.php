<?php

namespace App\Livewire\Frontend\Ads;

use Livewire\Component;

class Categories extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = \App\Models\Category::all();

        //get random categories
        $this->categories = $this->categories->shuffle();


        //count the number of ads in each category
        foreach ($this->categories as $category) {
            $category->ads_count = \App\Models\Ad::where('category_id', $category->id)->where('published', true)->where('expires_at', '>', now())->count();
        }
    }
    public function render()
    {
        return view(
        'livewire.frontend.ads.categories',
            [
                'categories' => $this->categories
            ]
        );
    }
}