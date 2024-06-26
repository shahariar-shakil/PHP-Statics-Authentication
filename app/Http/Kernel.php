<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
protected $routeMiddleware = [
    // ...
    'auth' => \App\Http\Middleware\AuthenticateAdmin::class,
    'auth:admin' => \App\Http\Middleware\AuthenticateAdmin::class, // Custom middleware if defined
    // ...
];

}