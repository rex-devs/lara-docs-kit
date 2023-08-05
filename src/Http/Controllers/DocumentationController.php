<?php

namespace RexDevs\Documentation\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class RoleController extends Controller
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

        $configRoutes = config('documentation.routes');

        foreach ($configRoutes as $route) {
            if ($route['name'] == $routeName) {
                return $route;
            }
        }
    }
}
