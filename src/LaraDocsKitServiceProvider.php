<?php

namespace RexDevs\LaraDocsKit;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaraDocsKitServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Route::as('lara-docs-kit.')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            });

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/lara-docs-kit.php' => config_path('lara-docs-kit.php'),
            ], 'lara-docs-kit-config');
        }
    }
}
