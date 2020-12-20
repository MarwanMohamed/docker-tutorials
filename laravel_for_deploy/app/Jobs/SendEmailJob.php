<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\User;
use App\Notifications\sendEmail;
use Notification;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $start;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($start = 0)
    {
        $this->start = $start;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $start = $this->start;
        $users = User::take(50)->offset($start)->get();
        Notification::send($users, new sendEmail('new Notification'));
        dispatch(new SendEmailJob($start + 50));
    }
}
