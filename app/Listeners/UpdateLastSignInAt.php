<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class UpdateLastSignInAt
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {   
        //$current = Carbon::now();     
        //$event->user->last_sign_in_at = $current->addHours(7);
        //$event->user->save();
        $current = Carbon::now();

        $event->user->last_sign_in_at = $event->user->current_sign_in_at ? $event->user->current_sign_in_at : $current->addHours(7);
        $event->user->current_sign_in_at = $current->addHours(7);
        $event->user->save();
    }

    
}
