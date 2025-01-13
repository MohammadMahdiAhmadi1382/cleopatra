<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //return view login
    public function index(){
        return AuthController::index();
    }
    //return login
    public function login(AuthRequest $request){
        return AuthController::login($request);
    }




}
