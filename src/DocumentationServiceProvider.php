<?php

namespace RexDevs\Documentation;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DocumentationServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Route::prefix('documentation')
            ->as('documentation.')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            });
    }
}
