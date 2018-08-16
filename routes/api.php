<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//login
Route::post('login', 'UserController@apiToken');

Route::group(['middleware' => 'auth:api'], function (){
    //all boards
    Route::get('boards', function (){
        $boards = \App\Board::all();
        return \App\Http\Resources\BoardResource::collection($boards);
    });

    //board
    Route::get('board/{board}', function (\App\Board $board){
        return new \App\Http\Resources\BoardResource($board);
    });
});
