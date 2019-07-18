<?php

namespace App\Console\Commands;

use App\Mail\EmailNotification;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'email who have not posted yet';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::find(1);
        Mail::to($user->email)->send(new EmailNotification($user));
    }
}
