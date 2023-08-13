<?php

return [
    'routes' => [
        [
            'name' => 'docs',
            'url' => '/docs',
            'dir' => 'docs/',
            'middleware' => [
                'web',
            ],
        ],
    ],

    'highlight_theme' => env('LDK_HIGHLIGHT_THEME', 'dark-plus'),
];
