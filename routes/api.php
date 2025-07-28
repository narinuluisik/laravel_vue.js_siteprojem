<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ContactMessageController;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\Admin\AboutUsController;
use App\Http\Controllers\Api\Admin\ProjectController;
use App\Http\Controllers\Api\Admin\TeamMemberController;
use App\Http\Controllers\Api\Admin\AboutPageController;
Route::middleware('api')->group(function () {
    Route::get('/slider', [HomeController::class, 'slider']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/contact-info', [ContactController::class, 'show']);
    Route::post('/send-message', [ContactMessageController::class, 'store']);
    Route::post('/login', [AuthController::class, 'login']);

});




Route::prefix('admin')->group(function () {
    // Genel sayfa için tüm veriler
    Route::get('/aboutpage', [AboutPageController::class, 'index']);

    // CRUD işlemleri
    Route::apiResource('/aboutus', AboutUsController::class);
    Route::apiResource('/projects', ProjectController::class);
    Route::apiResource('/team-members', TeamMemberController::class);
});