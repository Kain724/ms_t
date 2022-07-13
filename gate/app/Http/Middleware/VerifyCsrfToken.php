<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/api/register',
        '/api/login',
        '/api/user',
        '/api/logout',
        '/api/products',
        '/api/refresh',
        '/api/products/list',
        '/api/products2/list2',
        '/api/ping',
        // 'api.gate/api/',
        // 'api.gate/api/products/list',

    ];
}
