<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageUserController extends Controller
{
    // return home page
    public function home()
    {
        return UserController::home();
    }

    // return delete user
    public function delete(Request $request)
    {
        return UserController::delete($request);
    }

    // return log
    public function log(Request $request)
    {
        return UserController::log($request);
    }
}
