<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/books', [BookController::class,'index']);

Route::get('/books/detail/{id}', [BookController::class, 'detail']);

Route::get('/', [BookController::class,'index']);

Route::post('/books/add', [BookController::class, 'create']);

Route::post('/categories/create', [CategoryController::class, 'create']);

Route::post('/categories/update', [CategoryController::class, 'update']);

Route::get('/admins/dashboard', function () { return view('admins.dashboard');})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
