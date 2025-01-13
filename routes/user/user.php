<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\User\PageUserController;
use App\Http\Middleware\Auth\AuthenticatedAccess;
use App\Http\Middleware\Auth\NoAuthenticated;
use Illuminate\Support\Facades\Route;

//get login
Route::delete('/delete', [PageUserController::class , 'delete'])->name('action.user.delete');

//get log
Route::delete('/get-log', [PageUserController::class , 'log'])->name('get.user.log');
