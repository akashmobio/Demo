<?php

namespace App\Listeners;

use App\Events\CheckEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendListener
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
     * @param  CheckEvent  $event
     * @return void
     */
    public function handle(CheckEvent $event)
    {
        echo $event->email;
    }
}
