<?php

use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/slider', [HomeController::class, 'slider']);
