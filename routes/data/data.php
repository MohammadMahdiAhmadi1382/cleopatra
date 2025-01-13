<?php

use App\Http\Controllers\Data\PageDataController;
use App\Http\Controllers\User\PageUserController;
use Illuminate\Support\Facades\Route;

//get login
Route::get('/users', [PageDataController::class , 'users'])->name('get.data.users');
