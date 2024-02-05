<?php

namespace App\Livewire\Frontend\Ad;
use Livewire\Component;
use Butschster\Head\Facades\Meta;

class View extends Component
{
    public $ad;

    public function mount($slug)
    {
        $this->ad = \App\Models\Ad::where('slug', $slug)->first();
    }

    public function render()
    {
        Meta::prependTitle($this->ad->title);

        return view('livewire.frontend.ad.view');
    }
}
