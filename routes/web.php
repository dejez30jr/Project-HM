<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;

// Route for beranda
Route::get('/', [BerandaController::class, 'index']);

Route::get('/portfolio/{category?}', [PortfolioController::class, 'index'])
    ->name('portfolio')
    ->where('category', 'entertaiment|promotion|event|production');

// Layanan (halaman yang sudah ada)
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show')
    ->where('slug', 'entertainment|promotion|event|production-branding');

// ==== SEO Landing Pages (Service + Local SPG per Kota) ====
$landingSlugs = 'jasa-spg|jasa-spb|jasa-usher|jasa-talent|manpower-event|event|promotion|entertainment|production|branding|jasa-spg-jakarta|jasa-spg-bogor|jasa-spg-bandung|jasa-spg-depok|jasa-spg-bekasi|jasa-spg-tangerang|jasa-spg-surabaya';

// Ganti bahasa (wajib sebelum rute catch-all)
Route::get('/locale/{locale}', function (string $locale, Request $request) {
    abort_unless(in_array($locale, ['id', 'en']), 404);

    $request->session()->put('locale', $locale);

    return redirect()->back();
})->name('locale.switch');

Route::get('/{slug}', [LandingController::class, 'index'])
    ->where('slug', $landingSlugs);

// ==== Blog ====
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])
    ->name('blog.show')
    ->where('slug', 'harga-jasa-spg|tugas-spg-event|perbedaan-spg-dan-usher|cara-memilih-agency-spg|brand-activation|manpower-event|jasa-spg-untuk-event');

// Sitemap untuk SEO
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
