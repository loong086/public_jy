<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::any('/', function () {
    // return view('welcome');
    header('Content-Type: text/html; charset=utf8');  
    $id = $_GET['id'];
    // return $id;
    echo '123';
});
Route::any('/test1', "TestController@test1");
Route::any('/insa', "TxtController@insa");
Route::any('/ins', "cs\TsController@ins");



Route::group(['prefix'=>'db/test'], function() {
    
    Route::get('add', "db\TestController@add");
    Route::get('del', "db\TestController@del");
    Route::get('update', "db\TestController@update");
    Route::get('select', "db\TestController@select");
    Route::get('api_jsonp_encode', "db\TestController@api_jsonp_encode");
    
});


Route::group(["prefix"=>"db/text"], function() {
    Route::any('add',"db\TextController@add");
    Route::any('select',"db\TextController@select");
    Route::any('pg',"db\TextController@pg");
    Route::any('upload',"db\TextController@upload");
    Route::any('page', "db\TextController@page");
});

Route::group(["prefix" => "db/text2"], function () {
    Route::any('session', "Text2Controller@session");
});


// view
// Route::any('/text', "cs\TsController@ins");
