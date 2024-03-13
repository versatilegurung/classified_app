<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SubscribeForm extends Component
{

    public $email;
    public $first_name;
    public $last_name;

    private $api_key = "b694535e3c74d319e3205afd1b243039c849ae50f6656337a9bb925fecfb75ce ";

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        // Your code to subscribe the user https://mailer.subash.co.uk/api/subscriber/chitwanbuyandsell/store
        $response = Http::post('https://mailer.subash.co.uk/api/subscriber/chitwanbuyandsell/store', [
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'api_ket' => $this->api_key,
        ]);

    }

    public function render()
    {
        return view('livewire.subscribe-form');
    }
}
