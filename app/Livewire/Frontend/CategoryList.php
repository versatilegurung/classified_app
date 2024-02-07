<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class CategoryList extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = \App\Models\Category::limit(18)->get();

        //count the number of ads in each category
        foreach ($this->categories as $category) {
            $category->ads_count = \App\Models\Ad::where('category_id', $category->id)->count();
        }
    }
    public function render()
    {
        return view(
            'livewire.frontend.category-list',
            [
                'categories' => $this->categories
            ]
        );
    }
}
