<?php

namespace App\Livewire\Frontend\Auth;

use Illuminate\Support\Facades\Lang;
use Livewire\Component;

class VerifyEmail extends Component
{

    public $resent = false;
    public $sendEmailVerificationNotification;

    public function resendVerificationEmail()
    {
        auth()->user()->sendEmailVerificationNotification();
        session()->flash('resent', true);

        session()->flash('message', Lang::get('email-verification.sent'));
    }

    public function render()
    {
        //if already verified
        if (auth()->user()->email_verified_at !== null) {
            return redirect()->route('dashboard');
        }

        return view('livewire.frontend.auth.verify-email');
    }
}
