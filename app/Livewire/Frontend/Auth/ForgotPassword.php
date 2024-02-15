<?php

namespace App\Livewire\Frontend\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Butschster\Head\Facades\Meta;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Password;
use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Auth\Notifications\ResetPassword;


class ForgotPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|string|email|max:255',
    ];

    public function forgotPassword(Request $request)
    {
        $this->validate();
        
        // $token = Str::random($length = 64);

        $createToken = Password::createToken($this->email);


        Mail::send('mail.auth.forgot-password', ['token' => $createToken], function ($message) use($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        redirect()->route('login')->with('message', 'We have e-mailed your password reset link!'); 

        

    }
    public function render()
    {
        Meta::prependTitle('Forgot your password?');

        return view('livewire.frontend.auth.forgot-password');
    }
}
