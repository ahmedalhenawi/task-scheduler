<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make users admins';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::where('is_admin' , 0)->get();
        foreach ($users as $user){
            $user->update(['is_admin'=>1]);
        }
    }
}
