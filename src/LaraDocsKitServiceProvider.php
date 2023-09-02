<?php

namespace RexDevs\LaraDocsKit;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaraDocsKitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/lara-docs-kit.php', 'lara-docs-kit');
    }

    public function boot()
    {
        Route::as('lara-docs-kit.')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            });

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara-docs-kit');
        Blade::componentNamespace('RexDevs\\LaraDocsKit\\View\\Components', 'lara-docs-kit');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/lara-docs-kit.php' => config_path('lara-docs-kit.php'),
            ], 'lara-docs-kit-config');

            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/lara-docs-kit'),
            ], 'lara-docs-kit-views');

            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('lara-docs-kit'),
            ], 'lara-docs-kit-assets');
        }
    }
}
