<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;
use App\Models\Message as ModelsMessage;

class Message extends Component
{
    private $messages;

    public function mount()
    {
        $user_id = auth()->user()->id;
        $this->messages = ModelsMessage::where('recipient_id', $user_id)->orderBy('id', 'desc')->paginate(10);
    }

    public function deleteMessage($messageId)
    {
        $message = ModelsMessage::find($messageId);
        $message->delete();
        session()->flash('message', 'Message deleted successfully.');
    }
    public function render()
    {
        return view(
            'livewire.frontend.account.message',
            ['messages' => $this->messages]
        );
    }
}
