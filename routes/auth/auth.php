<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PageController;
use Illuminate\Support\Facades\Route;


Route::prefix('login')->group(function () {
    //get login
    Route::get('/',[PageController::class , 'index'])->name('page.login');

    //login
    Route::post('/auth',[PageController::class , 'login'])->name('action.login');
});

