<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarplateNumberController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\FeedController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\CategoryController;

Route::get('/carplates', [CarplateNumberController::class, 'index']);
Route::get('/tags', [TagController::class, 'index']);
Route::get('/feeds', [FeedController::class, 'index']);
Route::get('/settings', [SettingController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);