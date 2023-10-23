<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voted;

class votedController extends Controller
{
    //$_SERVER['REMOTE_ADDR'];
    //
    static function create(){
        try {
            voted::create(["ip"=>$_SERVER['REMOTE_ADDR']]);
            }
        catch (\Illuminate\Database\QueryException $th) {
            
        }
    }
    static function vote(){
        votedController::create();
        $voter=voted::where('ip',$_SERVER['REMOTE_ADDR'])->get()->first();
        if ($voter->votes_left>0){
            $voter->votes_left = $voter->votes_left - 1;
            $voter->save();
        }
    }
    static function canvote(){
        $voter=voted::where('ip',$_SERVER['REMOTE_ADDR'])->get()->first();
        if ($voter->votes_left>0){
            return true;
        }
        else return false;
    }
    static function clear(){
        voted::truncate();
    }
}
