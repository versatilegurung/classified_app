<?php

namespace App\Livewire\Frontend\Ad;

use Livewire\Component;
use Butschster\Head\Facades\Meta;

class View extends Component
{
    public $ad;
    public $images;

    public function mount($slug)
    {
        $this->ad = \App\Models\Ad::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        Meta::prependTitle($this->ad->title)
            ->setDescription($this->ad->description)
            ->setKeywords($this->ad->title);

        $this->ad->views++;
        $this->ad->save();
        return view('livewire.frontend.ad.view');
    }
}
