   <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SitemapController;

// Route for beranda
Route::get('/', [BerandaController::class, 'index']);

Route::get('/portfolio/{category?}', [PortfolioController::class, 'index'])
    ->name('portfolio')
    ->where('category', 'entertaiment|promotion|event|production');

// Sitemap untuk SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index']);


