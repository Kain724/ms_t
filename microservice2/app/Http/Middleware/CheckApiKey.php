<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Closure;

class CheckApiKey
{
    public function handle($request, Closure $next)
    {
        if(!$apiKey = $request->get('apikey') or $apiKey !== config('api.secret_key')){
            return response()->json([
                'status' => 'unauthorized',
                'message' => 'Wrong api key'
            ], 401);
        }

        return $next($request);
    }
}
