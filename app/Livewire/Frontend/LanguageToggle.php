<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Illuminate\Support\Facades\App;

class LanguageToggle extends Component
{
    public $supportedLocales = ['en', 'ne']; // english and nepali

    public function toggleLanguage($locale)
    {
        if (in_array($locale, $this->supportedLocales)) {
            App::setLocale($locale);
            session()->put('locale', $locale);
            $this->redirect(route('home')); // Adjust the route name or URL as needed
        }
    }

    public function render()
    {
        return view('livewire.frontend.language-toggle');
    }
}
