<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth/register',[AuthController::class, 'register'] );

Route::group(['middleware' => 'auth:api'], function() 
{
    Route::get('/register', function() {
        return auth()->user();
    });
});