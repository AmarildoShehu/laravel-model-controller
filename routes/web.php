<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, '__invoke'])->name('movies.index');
Route::get('/movies/{id}', [HomeController::class, 'show'])->name('movies.show');
