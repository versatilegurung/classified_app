<?php

namespace App\Livewire\Frontend\Account;

use App\Models\Message;
use Livewire\Component;

class UnreadMessages extends Component
{
    public $unreadCount = 0;

    public function mount()
    {
        $this->unreadCount = $this->unreadMessagesCount();
    }

    public function render()
    {
        return view('livewire.frontend.account.unread-messages');
    }
    public function unreadMessagesCount()
    {
        return Message::where('recipient_id', auth()->user()->id)
            ->where('read_at', null)
            ->count();
    }
}
