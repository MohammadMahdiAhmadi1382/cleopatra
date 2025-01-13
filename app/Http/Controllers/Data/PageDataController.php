<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageDataController extends Controller
{
    // return users
    public function users(Request $request)
    {
        return DataController::users($request);
    }
}
