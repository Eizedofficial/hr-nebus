<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureApiKeyIsValid
{
    /**
     * @throws AuthenticationException
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = $request->get('api_key');

        if (!$key || $key !== config('app.api_key')) {
            throw new AuthenticationException('Wrong api key');
        }

        return $next($request);
    }
}
