<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

it('has a route for every route in the routes array in the config file', function () {
    $route = [
        'name' => 'documentation',
        'url' => '/documentation',
        'dir' => 'docs/',
        'middleware' => [
            'web',
        ],
    ];

    Config::set('lara-docs-kit.routes', [$route]);

    expect(Route::has('lara-docs-kit.documentation'))->toBeTrue();
});

it('has no routes if the config file is empty', function () {
    Config::set('lara-docs-kit.routes', []);

    expect(Route::has('lara-docs-kit.docs'))->toBeFalse();
});
