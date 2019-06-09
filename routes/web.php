<?php

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
