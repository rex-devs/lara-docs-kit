<?php

use Illuminate\Support\Facades\Route;
use RexDevs\Documentation\Http\Controllers\DocumentationController;

foreach (config('documentation.routes') as $routes) {
    Route::get($route['url'].'/{file?}', DocumentationController::class)
        ->where('file', '.+')
        ->name($route['name']);
}
