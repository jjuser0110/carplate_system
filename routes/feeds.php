<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('/feeds')->as('feeds.')->middleware(['auth'])->group(function() {
    Route::get('/index', 'FeedController@index')->name('index');
    Route::get('/create', 'FeedController@create')->name('create');
    Route::post('/store', 'FeedController@store')->name('store');
    Route::get('/edit/{feed}', 'FeedController@edit')->name('edit');
    Route::post('/update/{feed}', 'FeedController@update')->name('update');
    Route::get('/destroy/{feed}', 'FeedController@destroy')->name('destroy');
});
