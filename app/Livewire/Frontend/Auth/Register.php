<?php

namespace App\Livewire\Frontend\Auth;

use App\Models\User;
use Livewire\Component;
use App\Mail\WelcomeEmail;
use Livewire\Attributes\Layout;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

#[Layout('layouts.app')]
class Register extends Component
{
    public $name, $email, $password;

    public $registrationSuccess = false;
    public $showPassword = false;

    public function toggleShowPassword()
    {
        $this->showPassword = !$this->showPassword;
    }

    protected $rules = [
        'name' => 'required|string|min:3|max:255',
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

        //send welcome email to user
        Mail::to($this->email)->send(new WelcomeEmail($user));

        //subscribe user to mailer.subash.co.uk
        Http::post('https://mailer.subash.co.uk/api/subscriber/chitwanbuyandsell/store', [
            'email' => $this->email,
            'api_key' => 'b694535e3c74d319e3205afd1b243039c849ae50f6656337a9bb925fecfb75ce', //required
            'first_name' => $this->name, //optional
        ]);

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
