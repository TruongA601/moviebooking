<?php

use App\Http\Controllers\Admin\accountController;
use App\Http\Controllers\Admin\signinController;
use App\Http\Controllers\Movie\movieController;
use Illuminate\Support\Facades\Route;

//login
Route::get('signin', [signinController::class, 'signin'])->name('signin');
Route::get('account', [accountController::class, 'account'])->name('account');
Route::get('account/{UserID}', [accountController::class, 'delete'])->name('delete');
Route::get('update/{UserID}', [AccountController::class, 'viewupdate'])->name('viewupdate');
Route::post('update/{UserID}', [AccountController::class, 'update'])->name('update');
Route::get('movies', [movieController::class, 'movies'])->name('movies');
Route::get('movies/{films_id}', [movieController::class, 'delete'])->name('mdelete');
Route::get('update/{films_id}', [movieController::class, 'viewupdate'])->name('mviewupdate');
Route::post('update/{films_id}', [movieController::class, 'update'])->name('mupdate');
