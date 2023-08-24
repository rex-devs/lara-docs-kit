<?php

namespace RexDevs\LaraDocsKit\Services;

class NavService
{
    public function getNav(string $directory, string $url): array
    {
        $dir = resource_path($directory);

        $nav = $this->readJson($dir);

        return $this->getLinks($nav, $url);
    }

    private function readJson($dir): array
    {
        $navFile = $dir.'nav.json';

        if (! file_exists($navFile)) {
            return [];
        }

        $contents = file_get_contents($navFile);

        return json_decode($contents, true);
    }

    private function getLinks(array &$array, string $url): array
    {
        if (empty($array)) {
            return [];
        }

        foreach ($array as $key => $link) {
            if (is_array($link)) {
                $array[$key] = $this->getLinks($link, $url);

                continue;
            }

            $array[$key] = $url.$link;
        }

        return $array;
    }
}
