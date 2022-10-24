<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::view('/filters', 'filters');

Route::view('/one-goods', 'katalog-one__goods');









