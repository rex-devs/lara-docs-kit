<?php

namespace RexDevs\LaraDocsKit\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class DocumentationController extends Controller
{
    public function __invoke(?string $file = null)
    {
        $config = $this->getConfigOptions();

        if (is_null($file)) {
            return 'no file';
        }

        return 'It has a file';
    }

    private function getConfigOptions(): array
    {
        $routeName = Route::currentRouteName();

        $configRoutes = config('lara-docs-kit.routes');

        foreach ($configRoutes as $route) {
            if ($route['name'] == $routeName) {
                return $route;
            }
        }
    }
}
