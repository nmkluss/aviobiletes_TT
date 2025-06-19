<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware here
    ];

    protected $middlewareGroups = [
        'web' => [
            // web middleware here
        ],

        'api' => [
            'throttle:api',
            'bindings',
        ],
    ];

    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'role' => \App\Http\Middleware\RoleMiddleware::class,

        // add your role middleware here, e.g.:
        // 'admin' => \App\Http\Middleware\RoleMiddleware::class,
    ];
}
