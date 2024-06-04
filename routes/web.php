<?php

use Illuminate\Support\Facades\Route;

Route::get('/{name}', function ($name) {
    return view('index', ['name'=> $name]);
});

Route::get('/hello', function () {
    return 'Hello!';
});     

Route::get('/greet/{name}', function ($name) {
    return 'Hello '. $name .'!';
});     

Route::fallback(function () {
    return 'Something else';
}); 