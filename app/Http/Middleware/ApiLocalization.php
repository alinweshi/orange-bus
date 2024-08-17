<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class ApiLocalization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check for language parameter in request
        $locale = $request->header('Accept-Language') ?: $request->get('locale');
        
        // Set the application locale based on the language parameter
        if ($locale && in_array($locale, ['en', 'ar'])) { // Add other supported languages here
            App::setLocale($locale);
        } else {
            App::setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
