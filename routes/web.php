<?php

use Illuminate\Support\Facades\Route;





Route::get('/', [\App\Http\Controllers\PageController::class, 'home']);

Route::view('/filters', 'filters');

Route::view('/one-goods', 'katalog-one__goods');









