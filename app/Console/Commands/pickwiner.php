<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\votedController;

use App\Http\Controllers\winnerController;
use App\Http\Controllers\wordsController;
class pickwiner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pickwiner';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'clear today\'s enteries and pick a winner';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        winnerController::new_winner();
        wordsController::clear();
        votedController::clear();
        echo "here";
    }
}
