<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;
use App\Models\Message as ModelsMessage;

class Message extends Component
{

    public $messages;

    public function render()
    {
        $this->messages = ModelsMessage::where('recipient_id', auth()->user()->id)->get();
        // dd($this->messages);
        return view(
            'livewire.frontend.account.message',
            ['messages' => $this->messages]
        );
    }
}
