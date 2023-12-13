<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\PostController;


//user
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

//profile photo
Route::middleware('auth:api')->group(function () {
    Route::post('/profile/update-profile', [ProfileController::class, 'update_profile']);
});

//post
Route :: post('posts/create','API\PostController@create');
Route :: post('posts/delete','API\PostController@delete');
Route :: post('posts/update','API\PostController@update');
Route :: post('posts','API\PostController@posts');
