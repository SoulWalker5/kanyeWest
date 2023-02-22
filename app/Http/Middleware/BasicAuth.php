<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (config('auth.basicLogin') !== $request->getUser() || config('auth.basicPassword') !== $request->getPassword()) {
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
