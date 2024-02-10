<?php

namespace App\Livewire\Frontend\Account;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Butschster\Head\Facades\Meta;

class Profile extends Component
{
    public function render()
    {
        Meta::setTitle(env('APP_NAME'))
            ->prependTitle('Your account dashboard');

        return view('livewire.frontend.account.profile');
    }
}
