<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\winnerController;
use App\Http\Controllers\wordsController;

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
            winnerController::new_winner();
            wordsController::clear();
        })->daily();    
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
