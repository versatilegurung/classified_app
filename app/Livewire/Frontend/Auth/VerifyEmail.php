<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class VerifyEmail extends Component
{

    public $resent = false;
    public $sendEmailVerificationNotification;

    public function resendVerificationEmail()
    {
        $user = Auth::user();

        if (!$user->hasVerifiedEmail()) {

            $user->sendEmailVerificationNotification();
            // dd('resendVerificationEmail');


            return back()->with('message', 'Verification email has been resent!');
        } else {
            return redirect('/dashboard'); // Or any other redirect if the email is already verified
        }
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
