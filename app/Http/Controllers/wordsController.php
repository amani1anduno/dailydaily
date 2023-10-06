<?php

namespace App\Http\Controllers;
use App\Models\words;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class wordsController extends Controller
{
    //
    static function create($content)  {
        try {
            words::create(['contant'=>$content]);
        } catch (\Illuminate\Database\QueryException $th) {
            //throw $th;
            if($content==null){
                echo "<script> alert('Hello! I am an alert box!!')</script>";
            }
            else{
                //add point
                $word=words::where('contant',$content)->get()->first();
                wordsController::add_point_by_content($word);
            }
        }
    }
    static function add_point(int $id ) {
        $mywords =words::findorfail($id);
        $mywords->points=$mywords->points+1;
        $mywords->save();
    }
    static function add_point_by_content(words $words) {
        $words->points=$words->points+1;
        $words->save();
    }
    static function clear(){
        words::truncate();
    }
    static function runnerUp(){
        return words::orderBy("points","desc")->get()->first();
    }
}
