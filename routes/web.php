<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Ruta principal del portafolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Ruta para procesar el formulario de contacto
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');

// Sitemap XML para SEO
Route::get('/sitemap.xml', function () {
    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    // Página principal
    $sitemap .= '<url>';
    $sitemap .= '<loc>' . url('/') . '</loc>';
    $sitemap .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
    $sitemap .= '<changefreq>weekly</changefreq>';
    $sitemap .= '<priority>1.0</priority>';
    $sitemap .= '</url>';

    $sitemap .= '</urlset>';

    return response($sitemap)->header('Content-Type', 'application/xml');
})->name('sitemap');

// Robots.txt para SEO
Route::get('/robots.txt', function () {
    $robots = "User-agent: *\n";
    $robots .= "Allow: /\n";
    $robots .= "Sitemap: " . url('/sitemap.xml') . "\n";

    return response($robots)->header('Content-Type', 'text/plain');
})->name('robots');
