<?php

namespace App\Livewire\Frontend\Ad;

use App\Models\AdImage;
use Livewire\Component;

class PhotoGallery extends Component
{
    public $ad_id;
    public $images;
    public $selectedImageIndex;

    public function mount($ad_id)
    {
        $this->ad_id = $ad_id;
        $this->images = AdImage::where('ad_id', $this->ad_id)->get();
        // dd($images);
    }

    public function render()
    {
        return view('livewire.frontend.ad.photo-gallery');
    }
    public function openPhotoSwipe($index)
    {
        $this->selectedImageIndex = $index;
        $this->dispatch('openPhotoSwipe');
    }
}
