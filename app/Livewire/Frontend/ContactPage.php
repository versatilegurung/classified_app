<?php

namespace App\Livewire\Frontend;

use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactMail;
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

        $this->reset();
        // Show success message
        session()->flash('message', 'Your message has been sent successfully!');
    }
    public function render()
    {
        return view('livewire.frontend.contact-page');
    }
}
