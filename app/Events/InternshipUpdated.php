<?php

namespace App\Events;

use App\Models\Internship;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InternshipUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $internship;

    public function __construct(Internship $internship)
    {
        $this->internship = $internship->load(['company','internshipStatus']);
    }

    public function broadcastOn()
    {
        return new Channel('internships');
    }

    public function broadcastAs()
    {
        return 'internship.updated';
    }

}
