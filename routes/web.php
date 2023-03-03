<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/', [ContentController::class, 'index']);

Route::get('/content/store', [ContentController::class, 'get']);
Route::post('/content/store', [ContentController::class, 'store']);
Route::get('/content/back', [ContentController::class, 'postSes']);
Route::get('/content/thanks', [ContentController::class, 'add']);
Route::post('/content/thanks', [ContentController::class, 'thanks']);

Route::get('/content/find', [ContentController::class, 'find']);
Route::get('/content/search', [ContentController::class, 'search']);

Route::post('/content/delete', [ContentController::class, 'destroy']);


