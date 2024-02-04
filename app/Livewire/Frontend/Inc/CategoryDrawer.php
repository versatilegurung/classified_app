<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Category;
use Livewire\Component;

class CategoryDrawer extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();

        foreach ($this->categories as $category) {
            $category->ads_count = \App\Models\Ad::where('category_id', $category->id)->count();
        }
    }
    public function render()
    {
        return view(
            'livewire.frontend.inc.category-drawer',
            [
                'categories' => $this->categories
            ]
        );
    }
}
