<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class ContentSecurityPolicy
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $csp = [
            "default-src 'self'",
            "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.googletagmanager.com https://www.google-analytics.com https://analytics.google.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://connect.facebook.net https://www.clarity.ms https://static.clarity.ms https://googleads.g.doubleclick.net https://pagead2.googlesyndication.com",
            "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdnjs.cloudflare.com https://fonts.bunny.net https://fonts.googleapis.com",
            "img-src 'self' data: https: https://www.googletagmanager.com https://www.google-analytics.com https://www.facebook.com https://*.fbcdn.net https://img.youtube.com https://i.ytimg.com https://www.clarity.ms https://static.clarity.ms https://googleads.g.doubleclick.net",
            "connect-src 'self' https://www.google-analytics.com https://www.googletagmanager.com https://analytics.google.com https://cdn.jsdelivr.net https://connect.facebook.net https://www.facebook.com https://*.a.run.app https://*.conversionsapigateway.com https://www.clarity.ms https://static.clarity.ms https://googleads.g.doubleclick.net",
            "font-src 'self' https://fonts.bunny.net https://cdnjs.cloudflare.com https://fonts.gstatic.com",
            "frame-src 'self' https://www.googletagmanager.com https://www.facebook.com https://www.youtube.com https://youtube.com",
            "media-src 'self' https://www.youtube.com https://youtube.com",
            "object-src 'none'",
            "base-uri 'self'"
        ];

        $response->headers->set('Content-Security-Policy', implode('; ', $csp));
        return $response;
    }
}