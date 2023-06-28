<?php

namespace berthott\LocaleMiddleware;

use berthott\LocaleMiddleware\Http\Middleware\LocaleMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * Register the libraries features with the laravel application.
 */
class LocaleMiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // add config
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'locale-middleware');
    }

    /**
     * Bootstrap services.
     */
    public function boot(Kernel $kernel): void
    {
        // publish config
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('locale-middleware.php'),
        ], 'config');

        // add middleware
        $router = app(Router::class);
        $router->aliasMiddleware('locale', LocaleMiddleware::class);
        foreach (config('locale-middleware.groups') as $group) {
            $router->pushMiddlewareToGroup($group, 'locale');
        }
    }
}
