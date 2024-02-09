<?php

namespace App\Livewire\Frontend\Inc;

use Livewire\Component;

class Milestone extends Component
{
    
    public function render()
    {
        //get count of total ads and users and categories
        $totalAds = \App\Models\Ad::count();
        $totalUsers = \App\Models\User::count();
        $totalCategories = \App\Models\Category::count();
        $totalLocations = \App\Models\Location::count();



        return view('livewire.frontend.inc.milestone',
            [
                'totalAds' => $totalAds,
                'totalUsers' => $totalUsers,
                'totalCategories' => $totalCategories,
                'totalLocations' => $totalLocations
            ]);
    }
}
