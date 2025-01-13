<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // If the user is logged in, allow access to the route.
        if (Auth::check()) {
            // Proceed with the request.
            return $next($request);
        }

        // If the user is not logged in, redirect them to the login page.
        return redirect()->route('page.login');  // You can change this to any other page if needed.
    }
}
