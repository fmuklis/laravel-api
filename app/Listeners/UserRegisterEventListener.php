<?php

namespace App\Listeners;

use App\Events\UserRegisterEvent;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserRegisterEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  App\Events\UserRegisterEvent  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->notify(new WelcomeEmailNotification());
    }
}
