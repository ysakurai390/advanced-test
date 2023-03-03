<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/', [ContentController::class, 'index']);

Route::get('/store', [ContentController::class, 'get']);
Route::post('/store', [ContentController::class, 'store']);
Route::get('/back', [ContentController::class, 'postSes']);
Route::get('/thanks', [ContentController::class, 'add']);
Route::post('/thanks', [ContentController::class, 'thanks']);

Route::get('/find', [ContentController::class, 'find']);
Route::get('/search', [ContentController::class, 'search']);


