<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/books', [BookController::class,'index']);

Route::get('/books/detail/{id}', [BookController::class, 'detail']);

Route::get('/', [BookController::class,'index']);

Route::get('/books/add', [BookController::class, 'add']);

Route::post('/books/add', [BookController::class, 'create']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
