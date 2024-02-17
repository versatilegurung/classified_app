<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ResetPassword extends Component
{
    public $token;

    public function mount()
    {
        $this->validate([
            'token' => 'required',
        ]);

        //check token exists
        $tokenExist = DB::table('password_reset_tokens')->where('token', $this->token)->first();

        if (!$tokenExist) {
            return redirect()->route('forgot-password')->with('error', 'Invalid token');
        }
    }


    public function render()
    {

        return view('livewire.frontend.auth.reset-password');
    }
}
