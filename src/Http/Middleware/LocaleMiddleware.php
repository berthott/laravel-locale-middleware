<?php

namespace berthott\LocaleMiddleware\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Middleware to handle the query parameter.
 */
class LocaleMiddleware
{
    /**
     * If the query parameter is set, the apps locale will be set accordingly.
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->filled(config('locale-middleware.queryVariableName'))) {
            app()->setLocale($request->input(config('locale-middleware.queryVariableName')));
        }
        return $next($request);
    }
}
