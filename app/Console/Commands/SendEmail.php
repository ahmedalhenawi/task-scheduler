<?php

namespace App\Console\Commands;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $emails = User::pluck('email')->toArray();
        foreach ($emails as $email){
        Mail::to($email)->send( new WelcomeMail() );
        }
    }
}
