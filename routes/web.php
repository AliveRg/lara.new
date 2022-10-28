<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\CartController;


Route::get('/', [PageController::class, 'home']);

Route::get('/filters', [PageController::class, 'filters']);

/* {"p_id": 1} */
Route::post('/favorite/add', [FavoriteController::class, 'add']);
/* {"p_id": 1} */
Route::post('/favorite/remove', [FavoriteController::class, 'remove']);


/* {"p_id": 1, "amount": 100} */
Route::post('/cart/add', [CartController::class, 'add']);
/* {"p_id": 1} */
Route::post('/cart/remove', [CartController::class, 'remove']);

Route::get('/one-goods', [PageController::class, 'onegoods']);









