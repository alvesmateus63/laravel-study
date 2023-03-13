<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/layout', [SiteController::class, 'layout']);
Route::get('/layout2', [SiteController::class, 'layout2']);

Route::get('/comp', [SiteController::class, 'comp']);
Route::get('/include', [SiteController::class, 'index2']);
Route::get('/', [SiteController::class, 'index']);
Route::get('exercicio', [SiteController::class, 'exercicio2']);


