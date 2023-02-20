<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::resource('quotes', App\Http\Controllers\QuoteController::class);
// Route::resource('/quotes', App\Http\Controllers\QuoteController::class);

 Route::get('/quotes', [QuoteController::class , 'index'])->name('quotes');
 Route::get('/quotes/create', [QuoteController::class, 'create'])->name('create');
 Route::post('/quotes', [QuoteController::class, 'store'])->name('store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
