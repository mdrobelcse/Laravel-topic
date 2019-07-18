<?php

namespace App\Listeners;

use App\Mail\SendVarification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class UserCreatedlistener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $email  = $event->user->email;

        Mail::to($email)->send(new SendVarification($event->user));
    }
}//end class
