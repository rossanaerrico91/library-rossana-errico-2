<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books',[BookController::class,'index'])->name('books.index');
Route::get('/books/crea',[BookController::class,'create'])->name('books.create');
Route::post('/books/salva',[BookController::class,'store'])->name('books.store');
Route::get('/books/{book}/dettagli',[BookController::class,'show'])->name('books.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
