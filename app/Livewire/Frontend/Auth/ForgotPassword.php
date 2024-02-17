<?php

namespace App\Livewire\Frontend\Auth;

use Carbon\Carbon;
use Livewire\Component;
use App\Mail\SendResetLink;

use Illuminate\Support\Str;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;


class ForgotPassword extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|string|email|max:255',
    ];

    public function forgotPassword(Request $request)
    {
        $this->validate();

        //check if user exists
        $user = DB::table('users')->where('email', $this->email)->first();

        if (!$user) {
            return redirect()->back()->with('erro', 'We can\'t find a user with that e-mail address.');
        }

        $token = Str::random($length = 64);

        //if already requested for password reset
        $tokenExist = DB::table('password_reset_tokens')->where('email', $this->email)->first();

        if (!$tokenExist) {
            DB::table('password_reset_tokens')->insert([
                'email' => $this->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
        }
        //update token and email in  password_resets table
        DB::table('password_reset_tokens')->where('email', $this->email)->update([
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        //send password reset link to user
        Mail::to($this->email)->send(new SendResetLink($token));

        redirect()->route('forgot-password')->with('message', 'We have e-mailed your password reset link!');
    }


    public function render()
    {
        Meta::prependTitle('Forgot your password?');

        return view('livewire.frontend.auth.forgot-password');
    }
}
