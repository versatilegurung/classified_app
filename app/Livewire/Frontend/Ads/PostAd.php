<?php

namespace App\Livewire\Frontend\Ads;

use App\Models\Ad;
use Livewire\Component;

use App\Models\Category;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Mary\Traits\WithMediaSync;
use Butschster\Head\Facades\Meta;
use Livewire\Attributes\Validate;
use Illuminate\Support\Collection;

class PostAd extends Component
{

    use WithFileUploads, WithMediaSync;

    public $categories;
    public $title;
    public $description;
    public $price;
    public $category_id;
    public $negotiable;
    public $selectedCondition;
    public $location;
    public array $images = [];

    protected $rules = [
        'title' => 'required|min:3|max:120',
        'description' => 'required|min:20|max:500',
        'price' => 'required|numeric|min:1|max:1000000',
        'category_id' => 'required',
        'images' => 'array|required|min:1|max:5',
        'images.*' => 'image|max:2048|mimes:jpg,jpeg,png',
        'negotiable' => 'required',
        'selectedCondition' => 'required',
        'location' => 'required'
    ];



    public function save()
    {
        $this->validate();
        dd($this->validate());
    }

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        Meta::prependTitle('Post Ad');

        return view('livewire.frontend.ads.post-ad');
    }
}
