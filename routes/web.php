<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return "This is About Page!";
});
