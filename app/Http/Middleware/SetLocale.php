<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = substr($request->header('Accept-Language', 'es'), 0, 2);

        if (in_array($locale, ['en', 'es'])) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}