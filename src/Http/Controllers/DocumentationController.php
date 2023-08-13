<?php

namespace RexDevs\LaraDocsKit\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class DocumentationController extends Controller
{
    public function __invoke(?string $file = null)
    {
        $config = $this->getConfigOptions();

        $contents = $this->getFileContents(
            dir: $config['dir'],
            filename: $file
        );

        $matter = $contents->matter();
        $html = $this->getHtml($contents->body());

        return view('lara-docs-kit::index')
            ->with('matter', $matter)
            ->with('html', $html);
    }

    private function getConfigOptions(): array
    {
        $configRoutes = config('lara-docs-kit.routes');
        $routeName = Route::currentRouteName();

        foreach ($configRoutes as $route) {
            if ('lara-docs-kit.'.$route['name'] == $routeName) {
                return $route;
            }
        }

        return [];
    }

    private function getFileContents(?string $dir = null, ?string $filename = null)
    {
        try {
            if (is_null($filename)) {
                $filename = 'index';
            }

            $contents = file_get_contents(resource_path($dir.$filename.'.md'));

            return YamlFrontMatter::parse($contents);
        } catch (\Exception $e) {
            Log::error($e);

            abort(404);
        }
    }

    private function getHtml(string $markdown): string
    {
        return app(MarkdownRenderer::class)
            ->highlightTheme(config('lara-docs-kit.highlight_theme'))
            ->toHtml($markdown);
    }
}
