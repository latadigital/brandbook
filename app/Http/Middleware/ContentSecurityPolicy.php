<?php

namespace App\Http\Middleware;

use Closure;

class ContentSecurityPolicy
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
        // Genera un nonce seguro para cada solicitud.
        $nonce = base64_encode(random_bytes(16));

        // Ajustes en la política CSP con el nonce generado.
        $csp = "default-src 'self';"
              ."script-src 'self' 'nonce-{$nonce}';"
              ."object-src 'none';"
              ."style-src 'self' 'unsafe-inline' fonts.googleapis.com;" 
              ."img-src 'self' easy--brandbook.s3.us-west-2.amazonaws.com easycl.vteximg.com.br placehold.co;"
              ."media-src 'none';"
              ."frame-src 'none';"
              ."font-src 'self' fonts.gstatic.com;"
              ."connect-src 'self';"
              ."upgrade-insecure-requests;";

        $response = $next($request);

        // Establece la política CSP en los encabezados de la respuesta.
        $response->headers->set('Content-Security-Policy', $csp);

        // Agrega el nonce a la respuesta para que pueda ser utilizado en las vistas.
        $response->headers->set('X-CSP-Nonce', $nonce);

        return $response;
    }
}
