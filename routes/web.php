<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();

 Route::get('/search', [SearchController::class, 'search'])->name('search');
 Route::get('/quotes', [QuoteController::class , 'index'])->name('quotes');
 Route::get('/quotes/create', [QuoteController::class, 'create'])->name('create');
 Route::post('/quotes/store', [QuoteController::class, 'store'])->name('store');
 
 Route::get('/quotes/{id}', [QuoteController::class, 'show'])->middleware(['auth', 'role:admin'])->name('show');
 Route::get('/quotes/{id}/edit', [QuoteController::class, 'edit'])->middleware(['auth', 'role:admin'])->name('edit');
 Route::put('/quotes/{id}', [QuoteController::class, 'update'])->middleware(['auth', 'role:admin'])->name('update');
 Route::delete('/quotes/{id}', [QuoteController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('destroy');
 Route::get('/quotes/favorite', [QuoteController::class, 'add-to-favorite'])->middleware(['auth', 'role:user'])->name('add-to-favorite');
 

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/dashboard', function () {
    return view('dashboard');
   })->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'role:admin'])->name('admin');


Route::get('/', function () {
    return view('home');
});

// Route::get('/quotes', [App\Http\Controllers\HomeController::class, 'index'])->name('quotes');

