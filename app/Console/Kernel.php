<?php

namespace App\Console;

use DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->call(function () {
        //     DB::table('recent_users')->delete();
        // })->daily();
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
        })->hourlyAt(23);
        $schedule->command('app:pickwiner')->daily()->appendOutputTo("scheduler.log");
    }

    /**
     * Register the commands for the application.
     */
    
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
