<?php

namespace App\Http;

use App\Http\Middleware\Access\Admin;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // ...
    ];

    protected $middlewareGroups = [
        'web' => [
            // ...
        ],

        'api' => [
            // ...
        ],
    ];

    protected $routeMiddleware = [
        // 'authenticated_access' => \App\Http\Middleware\Auth\AuthenticatedAccess::class,
    ];
}
