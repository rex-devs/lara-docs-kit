<?php

use Illuminate\Support\Facades\Route;
use RexDevs\LaraDocsKit\Http\Controllers\DocumentationController;

foreach (config('lara-docs-kit.routes') as $routes) {
    Route::get($route['url'].'/{file?}', DocumentationController::class)
        ->where('file', '.+')
        ->name($route['name']);
}
