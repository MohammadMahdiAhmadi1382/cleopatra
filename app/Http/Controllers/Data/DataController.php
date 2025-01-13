<?php

namespace App\Http\Controllers\Data;

use App\Helpers\CustomMessage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    //return users
    public static function users($request)
    {
        try {
            // Get the authenticated user
            $user = Auth::user();
            if($user->role==5){
                $search = $request->input('search.value');
                $start = $request->input('start');
                $length = $request->input('length');

                $query = User::query();

                // get search
                if ($search) {
                    $query->where('name', 'like', "%{$search}%")
                          ->orWhere('email', 'like', "%{$search}%")
                          ->orWhere('phone', 'like', "%{$search}%");
                }

                $totalRecords = $query->count();

                // pagenation
                $users = $query->skip($start)->take($length)->get();

                return response()->json([
                    'data' => $users,
                    'recordsTotal' => $totalRecords,
                    'recordsFiltered' => $search ? $users->count() : $totalRecords,
                ]);
            }else{
                $message = CustomMessage::CreateMessage('error', 'You do not have permission to access.');
                return response()->json($message, 200);
            }
        } catch (\Throwable $th) {
            // Handle any exceptions that might occur
            $message = CustomMessage::CreateMessage('error', $th->getMessage());
            return response()->json($message, 200);
        }
    }
}
