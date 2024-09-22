<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getPosts', [PostController::class, 'getPost']);

Route::get('create', [PostController::class, 'create']);
Route::post('postCreate', [PostController::class, 'postCreate']);
