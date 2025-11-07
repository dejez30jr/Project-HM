<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PortfolioController;

// Route for beranda
Route::get('/', [BerandaController::class, 'index']);
Route::get('/portfolio/{category?}', [PortfolioController::class, 'index'])
    ->name('portfolio')
    ->where('category', 'all|entertaiment|promotion|event|production');

// Route for portfolio
Route::get('/portfolio', [BerandaController::class, 'portfolio']);



