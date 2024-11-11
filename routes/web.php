<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/dettaglio-prodotto/{id}', [ProductController::class, 'show'])
    ->name('product.show');

Route::post('/invia-richiesta', [ProductController::class, 'send'])
    ->name('product.contact');
