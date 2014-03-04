<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('hello');
});

Route::get("/songs/search", "SongController@search");
Route::get("/songs", "SongController@listSongs");

Route::get("/dvds/search", "DvdController@search");
Route::get("/dvds", "DvdController@listDvds");
Route::post("/dvds", "DvdController@insertDvd");
Route::get("/dvds/create", "DvdController@createDvd");

Route::get("/omdb/results", function() {
    $title = Input::get("title");
    $omdb = new \Itp\Api\OMDBSearch();

    $json = $omdb->getResults($title);

//    dd($json);

    return View::make("omdb/results", [
        "movie" => $json
    ]);
});

Route::get("/omdb/search", function() {
    return View::make("omdb/search");
});