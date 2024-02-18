<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Message;
use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Notifications\NewMessageNotification;

class ComposeMessage extends Component
{

    public $composeBox = false;
    public $adId;
    public $ad;
    public $message = '';


    // if user is not logged in do not show the form
    public function showComposeBox()
    {
        if (auth()->check()) {
            $this->composeBox = true;
        } else {
            $this->composeBox = false;
        }
    }

    protected $rules = [
        'message' => 'required|min:4|max:4000'
    ];

    public function sendMessage()
    {
        $this->validate();

        // dd($this->validate());

        $sendMessage = new Message([
            'message' => $this->message,
            'sender_id' =>  auth()->user()->id,
            'recipient_id' => $this->ad->user->id,
            'ad_id' => $this->ad->id,
            'read_at' => null,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sendMessage->save();

        //send email notification to user who posted the ad
        $this->ad->user->notify(new NewMessageNotification($sendMessage));

        $this->reset('message');

        $this->composeBox = false;

        return session()->flash('message', 'Message sent successfully');
    }


    public function mount($adId)
    {
        $this->ad = \App\Models\Ad::where('id', $adId)
            ->where('published', true)
            ->firstOrFail();
        // dd($this->ad);
    }

    public function render()
    {

        return view('livewire.frontend.account.compose-message');
    }
}
