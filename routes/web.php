<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Ruta principal del portafolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Ruta para procesar el formulario de contacto
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');
