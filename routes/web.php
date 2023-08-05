<?php

use Illuminate\Support\Facades\Route;
use RexDevs\LaraDocsKit\Http\Controllers\DocumentationController;

if (! is_null(config('lara-docs-kit.routes')) && is_array(config('lara-docs-kit.routes'))) {
    foreach (config('lara-docs-kit.routes') as $route) {
        Route::get($route['url'].'/{file?}', DocumentationController::class)
            ->where('file', '.+')
            ->middleware($route['middleware'])
            ->name($route['name']);
    }
}
