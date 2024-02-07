<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserRegisterNotification
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        // Send email to the user
        Mail::to($event->user->email)->send(new \App\Mail\UserRegistered($event->user));

        // Send email to the admin
        $adminEmail = 'admin@example.com'; // Replace with your admin email
        Mail::to($adminEmail)->send(new \App\Mail\AdminNotification($event->user));
    }
}
