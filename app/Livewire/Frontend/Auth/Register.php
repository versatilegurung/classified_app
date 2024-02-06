<?php

namespace App\Livewire\Frontend\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;

#[Layout('layouts.app')]
class Register extends Component
{
    public $name, $email, $password, $passwordConfirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|same:passwordConfirmation',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // $this->sendConfirmationEmail($user); // sends confirmation email to user.
        $this->reset(); // reset form fields

        //how to send flash message from language file
        session()->flash('message', Lang::get('register_success'));

        // session()->flash('message', trans('register_success'));
        // Or redirect to another page
    }


    public function render()
    {

        Meta::prependTitle('Register');

        return view('livewire.frontend.auth.register');
    }
}