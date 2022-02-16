<?php

namespace berthott\LocaleMiddleware\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->filled(config('locale-middleware.queryVariableName'))) {
            app()->setLocale($request->input(config('locale-middleware.queryVariableName')));
        }
        return $next($request);
    }
}
