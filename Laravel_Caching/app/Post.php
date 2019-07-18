<?php

namespace App;

use App\Events\PostcreatedEvent;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dispatchesEvents = [
        'created' => PostcreatedEvent::class,
    ];
}
