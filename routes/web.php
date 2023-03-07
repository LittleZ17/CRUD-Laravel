<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/upload', [UploadController::class, 'upload']);
Route::post('/upload', 'CloudinaryController@upload');

Auth::routes();

Route::resource('quotes', App\Http\Controllers\QuoteController::class);

