<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return response()->json(['message' => "You can only access this resource from the USA", "data" => $_SERVER], 403);
        if (($request->country !== 'USA')) {
            return response()->json(['message' => "You can only access this resource from the USA"], 403);
        }
        return $next($request);
    }
}
