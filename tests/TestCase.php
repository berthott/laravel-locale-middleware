<?php

namespace berthott\LocaleMiddleware\Tests;

use berthott\LocaleMiddleware\LocaleMiddlewareServiceProvider;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LocaleMiddlewareServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(function () {
                Route::get('/get', function () {
                    return 'get';
                })->name('get');
                Route::post('/post', function () {
                    return 'post';
                })->name('post');
                Route::put('/put', function () {
                    return 'put';
                })->name('put');
                Route::delete('/delete', function () {
                    return 'delete';
                })->name('delete');
            });
    }
}
