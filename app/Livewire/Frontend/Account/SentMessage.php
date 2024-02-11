<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;

class SentMessage extends Component
{

    public function render()
    {

        //get user id
        $user = auth()->user();

        //list all message which are sent by user.
        $messages = \App\Models\Message::where('sender_id', $user->id)->orderBy('id', 'desc')->paginate(10);
        // dd($messages);

        return view(
            'livewire.frontend.account.sent-message',
            ['messages' => $messages]
        );
    }
}
