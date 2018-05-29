<?php

namespace App\Listeners;

use App\Events\PostIndexEvent;

class PostIndexListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param PostIndexEvent $event
     */
    public function handle(PostIndexEvent $event)
    {
        $event->post->increment('click');
    }
}
