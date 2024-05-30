<?php

namespace App\Http\Middleware;

use Closure;

class FrameHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Añadir el encabezado X-Frame-Options
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');

        // Añadir el encabezado X-Content-Type-Options
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        return $response;
    }
}
