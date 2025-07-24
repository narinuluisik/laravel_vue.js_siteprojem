<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ContactMessageController;

// API endpoint'leri
Route::middleware('api')->prefix('api')->group(function () {
    Route::get('/slider', [HomeController::class, 'slider']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/contact-info', [ContactController::class, 'show']);

// İletişim formu mesajı gönderme (POST)
Route::post('/send-message', [ContactMessageController::class, 'store']);
});


// Sabit iletişim bilgisi (GET)



// Vue.js'in SPA (Single Page Application) yönlendirmesi için
Route::get('/{any}', function () {
    return view('home');
})->where('any', '.*');
