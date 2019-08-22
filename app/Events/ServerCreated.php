<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ServerCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $message = "test11122";

    /**
     * Create a new event instance.
     *
     * @return void
     * 
     */
    public function __construct($message="")
    {
        $this->message=$message;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ["pusher-client-server-created"];
    }

    // /**
    //  * Get the broadcast event name.
    //  *
    //  * @return string
    //  */
    // public function broadcastAs()
    // {
    //     return 'app.server-created';
    // }
}
