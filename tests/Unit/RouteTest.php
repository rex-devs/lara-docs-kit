<?php

use Illuminate\Support\Facades\Route;

it('has a route for every route in the routes array in the config file', function () {
    expect(Route::has('lara-docs-kit.docs'))->toBeTrue();
});
