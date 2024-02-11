<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Mail\Events\MessageSent;

class ComposeMessage extends Component
{

    public $adId;
    public $ad;
    public bool $composeBox = false;


    public $message = '';
    public $name;
    public $email;

    // if user is not logged in do not show the form 
    public function showComposeBox()
    {
        if (auth()->check()) {
            $this->composeBox = true;
        } else {
            $this->composeBox = false;
        }
    }

    public function sendMessage()
    {

        $sender_id = auth()->check() ? auth()->user()->id : null;

        $this->validate([
            'message' => 'required|min:4|max:4000'
        ]);

        $message = $this->message;

        $message = new Message([
            'message' => $message,
            'sender_id' =>  $sender_id,
            'recipient_id' => $this->ad->user->id,
            'ad_id' => $this->ad->id,
            'read_at' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $message->save();

        // event(new MessageSent($message));

        $this->message = '';


        return session()->flash('message', 'Message sent successfully');
        //wait for 2 seconnd close the compose box
        sleep(2);
        $this->composeBox = false;
    }


    public function mount($adId)
    {
        $this->ad = \App\Models\Ad::where('id', $adId)->firstOrFail();
        // dd($this->ad);
    }

    public function render()
    {

        return view('livewire.frontend.account.compose-message');
    }
}