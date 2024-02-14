<?php

namespace App\Livewire\Frontend\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Events\Registered;

#[Layout('layouts.app')]
class Register extends Component
{
    public $name, $email, $password, $passwordConfirmation;

    public $registrationSuccess = false;

    public $showPassword = false;

    public function toggleShowPassword()
    {
        $this->showPassword = !$this->showPassword;
    }



    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ];

    public function mount()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard');
        }
    }


    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        $this->reset(); // reset form fields

        $this->registrationSuccess = true;

        session()->flash('message', Lang::get('register_success'));
    }


    public function render()
    {

        Meta::prependTitle('Register');

        return view('livewire.frontend.auth.register');
    }
}
