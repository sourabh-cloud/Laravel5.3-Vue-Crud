<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contacts', 'ContactController@index');

