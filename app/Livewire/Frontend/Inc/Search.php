<?php

namespace App\Livewire\Frontend\Inc;

use App\Models\Ad;
use Livewire\Component;

class Search extends Component
{

    public $searchTerm = '';

    public $adImages = [];


    public function render()
    {
        $results = [];

        if (strlen($this->searchTerm) >= 1) {
            $results = Ad::where('title', 'like', '%' . $this->searchTerm . '%')
                ->where('published', true)->limit(4)->get();
        }

        return view('livewire.frontend.inc.search', [
            'results' => $results
        ]);
    }
}
