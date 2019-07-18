<?php

namespace App\Listeners;

use App\Post;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostcachListener
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
        cache()->forget('articles');
        $posts = Post::paginate(5);
        cache()->forever('articles',$posts);
        info(cache('articles'));
        info(cache()->get('articles'));
    }
}
