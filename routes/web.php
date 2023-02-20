<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

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

//Auth::routes();

Route::resource('quotes', App\Http\Controllers\QuoteController::class) ->group(function(){
  Route::get('search', 'searchQuotes');

});
// Route::resource('/quotes', App\Http\Controllers\QuoteController::class);

// Route::get('/quotes', [App\Http\Controllers\HomeController::class, 'index'])->name('quotes');


// Route::middleware(['auth']) ->group(function(){
//   Route::get('search', 'searchQuotes');

// });