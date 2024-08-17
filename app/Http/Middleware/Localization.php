<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            // Set the default locale to Arabic if no locale is set in the session
            $locale = config('app.locale', 'ar');
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return $next($request);
    }
}
