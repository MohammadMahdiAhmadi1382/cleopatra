<?php

namespace App\Http\Controllers\User;

use App\Helpers\CustomMessage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //return view home
    public static function home()
    {
        return view('admin.pages.home');
    }

    //return delete user
    public static function delete($request)
    {
        try {
            // Get the authenticated user
            if ($user = User::find($request->data['user_id'])) {
                // Delete the user if found
                $user->delete();
                $text_log="Admin deleted the user.";
                $log = CustomMessage::Log(Auth::user()->id,'delete_user','','success',1);
                $message = CustomMessage::CreateMessage('success', 'User deleted successfully.');
            } else {
                // If user is not found
                $message = CustomMessage::CreateMessage('error', 'User to delete not found.');
            }
        } catch (\Throwable $th) {
            // Handle any exceptions that might occur
            $message = CustomMessage::CreateMessage('error', $th->getMessage());
        }

        return response()->json($message, 200);
    }

    //return log
    public static function log($request)
    {
        try {
            // Get the authenticated user
            if ($user = User::find($request->user_id)) {
                // Delete the user if found
                $response="";
                foreach($user->log as $item){
                    $response.="";
                }
                $message = CustomMessage::CreateMessage('success', '');
            } else {
                // If user is not found
                $message = CustomMessage::CreateMessage('error', 'User to delete not found.');
            }
        } catch (\Throwable $th) {
            // Handle any exceptions that might occur
            $message = CustomMessage::CreateMessage('error', $th->getMessage());
        }

        return response()->json($message, 200);
    }
}
