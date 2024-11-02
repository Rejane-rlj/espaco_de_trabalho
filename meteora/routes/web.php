<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('empresa');
});


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});