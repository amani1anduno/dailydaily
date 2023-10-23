<?php

use App\Http\Controllers\votedController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wordsController;
use App\Models\words;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome',['wordsList'=>  words::all()->sortBy("points",descending:true)]);
});
Route::post('/', function () {
    wordsController::create(request("content"));
    
    return redirect('/');
});
Route::get('/winners', function () {
    return view('winners');
}
);
Route::get('/{id}', function (int $id) {
    votedController::create();
    if (votedController::canvote()){
        wordsController::add_point($id);
        votedController::vote();
        return redirect('/');

    }
    else{
        return Redirect::back()->withErrors(['msg' => 'sorry, you already used up your votes']);
    }
});
