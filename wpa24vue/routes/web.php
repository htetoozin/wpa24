<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});


//Route::get("main", 'MainController@index'); //For Index.blade.php
//Route::get("vue", "VueController@vue"); //For index-vue.blade.php
//Route::get("data", 'AjaxController@data'); //For Index.blade.php

Route::resource("blogs", "BlogController");

