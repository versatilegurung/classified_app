<?php

namespace App\Listeners;

use App\Events\NewAdPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToAdmin implements ShouldQueue
{
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
    public function handle(NewAdPosted $event): void
    {

        // Access the ad from the event
        $ad = $event->ad;
        // Customize the email sending logic
        Mail::to(env('ADMIN_EMAIL'))->send(new \App\Mail\NewAdPostedMail($ad));
    }
}
