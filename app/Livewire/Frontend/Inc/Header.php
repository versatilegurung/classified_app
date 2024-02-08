<?php

namespace App\Livewire\Frontend\Inc;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Header extends Component
{
    public $isOpen = false;

    public bool $myModal = false;

    public $showSearchForm = false;


    public function toggleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function toggleSearchForm()
    {
        $this->showSearchForm = !$this->showSearchForm;
    }

    public function closeSearchForm()
    {
        $this->showSearchForm = false;
    }

    public function checkAuth()
    {
        if (Auth::check()) {
            // User is logged in, redirect to the account page
            return redirect()->route('account.profile');
        } else {
            // User is not logged in, redirect to the login page
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.frontend.inc.header');
    }
}
