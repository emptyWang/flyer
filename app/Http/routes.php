<?php

Route::get('/', function () {
    flash()->success('Hi!', 'Welcome to here!');
    return view('pages.home');
});

Route::resource('flyers', 'FlyersController');
Route::get('{zip}/{street}', 'FlyersController@show');