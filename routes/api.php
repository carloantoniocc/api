<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('vi/posts', App\Http\Controllers\Api\V1\PostController::class); 
