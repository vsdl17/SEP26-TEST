<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth/register',[AuthController::class, 'register'] );
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::post('google-login', [SocialAuthController::class, 'googleApiLogin']);
