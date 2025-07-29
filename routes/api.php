<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ContactMessageController;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\Admin\AboutUsController;
use App\Http\Controllers\Api\Admin\ProjectController;
use App\Http\Controllers\Api\Admin\TeamMemberController;
use App\Http\Controllers\Api\Admin\AboutPageController;
use App\Http\Controllers\Api\Admin\AdminContactController;
use App\Http\Controllers\Api\Admin\AdminContactMessageController;


Route::middleware('api')->group(function () {

    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/contact-info', [ContactController::class, 'show']);
    Route::post('/send-message', [ContactMessageController::class, 'store']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::resource('contacts', ContactController::class)->except(['create', 'edit']);
});


Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    // Genel sayfa için tüm veriler
    Route::get('/aboutpage', [AboutPageController::class, 'index']);

    // CRUD işlemleri
    Route::apiResource('/aboutus', AboutUsController::class);
    Route::apiResource('/projects', ProjectController::class);
    Route::apiResource('/team-members', TeamMemberController::class);
    Route::resource('contacts', AdminContactController::class)->except(['create', 'edit']);

    Route::get('/contact-messages', [AdminContactMessageController::class, 'index']);
    Route::get('/contact-messages/{id}', [AdminContactMessageController::class, 'show']);
    Route::delete('/contact-messages/{id}', [AdminContactMessageController::class, 'destroy']);
});
