<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class LanguageToggle extends Component
{
    public $currentLanguage;

    public function mount()
    {
        $this->currentLanguage = App::currentLocale();
    }

    public function toggleLanguage()
    {
        $newLanguage = $this->currentLanguage === 'en' ? 'ne' : 'en';
        App::setLocale($newLanguage);
        $this->currentLanguage = $newLanguage;
    }


    public function render()
    {
        return view('livewire.frontend.language-toggle');
    }
}
