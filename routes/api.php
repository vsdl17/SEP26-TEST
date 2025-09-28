<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth/register',[AuthController::class, 'register'] );
Route::post('auth/login',[AuthController::class, 'login'] );
Route::get('auth/google', [SocialAuthController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::post('google-login', [SocialAuthController::class, 'googleApiLogin']);

// Route::get('news/{id}',[NewsController::class, 'view'] );
// Route::get('news/{id}/settings',[NewsController::class, 'settings'] );
// Route::get('news/random',[NewsController::class, 'random'] );
// Route::get('news/related/{id}',[NewsController::class, 'related'] );
// Route::get('news/categories',[CategoryController::class, 'index'] );

Route::middleware(['jwt.auth'])->group(function() 
{
    Route::get('news',[NewsController::class, 'index'] );
    Route::get('news/{id}',[NewsController::class, 'view'] );
    Route::get('news/{id}/settings',[NewsController::class, 'settings'] );
    Route::get('news/random',[NewsController::class, 'random'] );
    Route::get('news/related/{id}',[NewsController::class, 'related'] );
    Route::get('news/categories',[CategoryController::class, 'index'] );
    Route::put('news-settings/{id}/font-color', [NewsController::class, 'updateFontColor']);
});