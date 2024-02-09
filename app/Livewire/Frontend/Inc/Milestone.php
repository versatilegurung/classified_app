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

        $totalSold = \App\Models\Ad::where('is_sold', true)->count();
        $totalPublished = \App\Models\Ad::where('published', true)->count();



        return view(
            'livewire.frontend.inc.milestone',
            [
                'totalAds' => $totalAds,
                'totalUsers' => $totalUsers,
                'totalCategories' => $totalCategories,
                'totalLocations' => $totalLocations,
                'totalSold' => $totalSold,
                'totalPublished' => $totalPublished,
            ]
        );
    }
}
