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

Route::controller(movieController::class)->group(function () {
    Route::get('movies','movies')->name('movies');
    Route::get('movies/{films_id}', 'delete')->name('mdelete');
    Route::get('mupdate/{films_id}','viewupdate')->name('mviewupdate');
    Route::post('mupdate/{films_id}', 'update')->name('mupdate');
    Route::get('madd','viewadd')->name('mviewadd');
    Route::post('madd','add')->name('madd');
});
