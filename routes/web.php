<?php

use App\Http\Controllers\Auth\PageController;
use App\Http\Controllers\User\PageUserController;
use App\Http\Middleware\Auth\AuthenticatedAccess;
use Illuminate\Support\Facades\Route;


require_once('auth/auth.php');


// other pages
Route::prefix('/')->middleware([AuthenticatedAccess::class])->group(function () {
    require_once('page/page.php');
    require_once('data/data.php');
    require_once('user/user.php');
});
