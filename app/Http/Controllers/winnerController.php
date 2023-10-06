<?php

namespace App\Http\Controllers;

use App\Models\winner;
use Illuminate\Http\Request;
use App\Http\Controllers\wordsController;

class winnerController extends Controller
{
    //
    static function new_winner(){
        $winner = wordsController::runnerUp();
        $winner->content;
        winner::create(["content"=>$winner->contant, "points"=>$winner->points, "win_date"=>$winner->created_at, ]);
    }
}
