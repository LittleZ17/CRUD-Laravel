<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::resource('quotes', App\Http\Controllers\QuoteController::class);

