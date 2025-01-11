<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\CustomMessage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //return view login
    public static function index()
    {
        return view('auth.pages.login');
    }

    //return login
    public static function login($request)
    {
        try {
            // Validate user credentials
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            // Check if the user credentials are correct
            if (Auth::attempt($credentials)) {
                // Get the authenticated user
                $user = Auth::user();

                // Send success message
                $message = CustomMessage::CreateMessage('success', 'Login successful.');

            } else {
                // Send error message if authentication fails
                $message = CustomMessage::CreateMessage('error', 'Invalid email or password.');
            }
        } catch (\Throwable $th) {
            // Handle any exceptions that might occur
            $message = CustomMessage::CreateMessage('error', $th->getMessage());
        }
        return response()->json($message, 200);
    }
}
