<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('/carplate-number')->as('carplate_number.')->middleware(['auth'])->group(function() {
    Route::get('/index', 'CarplateNumberController@index')->name('index');
    Route::get('/create', 'CarplateNumberController@create')->name('create');
    Route::post('/store', 'CarplateNumberController@store')->name('store');
    Route::get('/edit/{carplate_number}', 'CarplateNumberController@edit')->name('edit');
    Route::put('/update/{carplate_number}', 'CarplateNumberController@update')->name('update'); 
    Route::get('/destroy/{carplate_number}', 'CarplateNumberController@destroy')->name('destroy');
});