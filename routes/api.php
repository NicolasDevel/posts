<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtiliesController;

Route::get('posts', [UtiliesController::class, 'posts']);