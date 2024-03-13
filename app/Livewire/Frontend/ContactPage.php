<?php

namespace App\Livewire\Frontend;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactPage extends Component
{

    public $name;
    public $email;
    public $message;

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //adminEmail
        $admin_email = 'market.chitwan@gmail.com';

        // Save to database
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        //clear input fields

        // Send email
        Mail::to($admin_email)->send(new ContactMail($this->name, $this->email, $this->message));

        //subscribe user to mailer.subash.co.uk
        Http::post('https://mailer.subash.co.uk/api/subscriber/chitwanbuyandsell/store', [
            'email' => $this->email,
            'api_key' => 'b694535e3c74d319e3205afd1b243039c849ae50f6656337a9bb925fecfb75ce', //required
            'first_name' => $this->name, //optional
        ]);


        $this->reset();
        // Show success message
        session()->flash('message', 'Your message has been sent successfully!');
    }
    public function render()
    {
        return view('livewire.frontend.contact-page');
    }
}
