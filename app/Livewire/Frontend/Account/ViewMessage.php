<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;

class ViewMessage extends Component
{
    public $message_id;

    public function mount()
    {
        $this->message_id = request()->id;
    }

    public function render()
    {
        $view_message = \App\Models\Message::find($this->message_id)->where('recipient_id', auth()->user()->id)->firstOrFail();

        //update read at on message
        $view_message->read_at = now();
        $view_message->save();

        return view(
            'livewire.frontend.account.view-message',
            ['view_message' => $view_message]
        );
    }
}
