<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Butschster\Head\Facades\Meta;

class Home extends Component
{

    public function render()
    {

        Meta::prependTitle('Chitwan Buy & Sell')
            ->setDescription('Welcome to Chitwan Buy & Sell, your go-to destination for hassle-free and cost-free classified ads! We take pride in providing a user-friendly platform that connects buyers and sellers from all walks of life without any financial barriers.')
            ->setKeywords('Chitwan Buy & Sell, Chitwan, Buy, Sell, Classified, Ads, Free, Nepal, Chitwan, Bharatpur, Narayangarh, Ratnanagar, Tandi, Madi, Chitwan, Sauraha, Meghauli')
            ->setCanonical(url('/'))
            ->setFavicon(asset('page_images/favicon.png'));

        return view('livewire.frontend.home');
    }
}
