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

    #[Validate('image|max:1024')]
    public $images = [];
    
    public $categories;

    public function save()
    {
        foreach ($this->images as $photo) {
            $photo->store(path: 'ad_photos');
        }
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
