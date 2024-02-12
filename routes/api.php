<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;


Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

Route::get('/posts/{id}', [App\Http\Controllers\Api\PostController::class, 'show']);
