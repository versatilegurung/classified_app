<?php

namespace App\Livewire\Frontend;

use App\Models\Ad;
use Livewire\Component;

class SearchResult extends Component
{

    public $query = '';
    public $results =[];

    protected $listeners = ['searchTermUpdated'];

    public function render()
    {

        $this->results = Ad::where('name', 'like', '%' . $this->query . '%')
            ->orWhere('description', 'like', '%' . $this->query . '%')
            ->get();

        return view('livewire.frontend.search-result');
    }

    public function searchTermUpdated($term)
    {
        $this->query = $term;
    }
}
