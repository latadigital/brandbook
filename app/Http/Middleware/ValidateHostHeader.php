<?php

namespace App\Http\Middleware;

use Closure;

class ValidateHostHeader
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
        $allowedHosts = ['brandbook.easy.cl', 'www.brandbook.easy.cl', '127.0.0.1'];

        if (!in_array($request->getHost(), $allowedHosts)) {
            abort(403, 'Host no permitido');
        }

        return $next($request);
    }
}
