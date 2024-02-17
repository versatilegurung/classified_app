<?php

namespace App\Livewire\Frontend\Auth;

use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public $token;
    public $password;


    public function resetPassword()
    {
        $this->validate([
            'password' => 'required|string|min:8',
        ]);

        $tokenExist = DB::table('password_reset_tokens')->where('token', $this->token)->first();

        if (!$tokenExist) {
            return redirect()->back()->with('message', 'Invalid token');
        }

        $updatePasswod = DB::table('users')->where('email', $tokenExist->email)->update([
            'password' => Hash::make($this->password)
        ]);

        DB::table('password_reset_tokens')->where('token', $this->token)->delete();

        return redirect()->back()->with('message', 'Password reset successfully');
    }




    public function render()
    {

        return view('livewire.frontend.auth.reset-password');
    }
}
