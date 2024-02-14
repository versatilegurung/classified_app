<?php

namespace App\Providers;

use App\Events\NewAdPosted;
use App\Listeners\LogVerifiedUser;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Mail\Events\MessageSent;
use App\Listeners\SendMessageNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Verified::class => [
            LogVerifiedUser::class,
        ],
        //this sends an email to recipent user when message is sent on Ad.
        MessageSent::class => [
            SendMessageNotification::class,
        ],

        // this send an admin when ad is posted.
        NewAdPosted::class => [
            \App\Listeners\SendEmailToAdmin::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
