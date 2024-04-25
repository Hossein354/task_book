<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->middleware('auth')->group(function () {

    Route::get('/', [BookController::class, 'index'])->name('home');
    Route::get('edit/{book_id}', [BookController::class, 'edit'])->name('book.edit');
    Route::put('update/{book_id}', [BookController::class, 'update'])->name('book.update');
    Route::delete('delete/{book_id}', [BookController::class, 'delete'])->name('book.delete');
});

Route::get('/login', [LoginController::class, 'loginView'])->name('login.view');
Route::post('/login', [LoginController::class, 'login'])->name('login');
