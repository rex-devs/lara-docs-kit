<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Defining routes configuration
    |--------------------------------------------------------------------------
    |
    | This array contains routes that provide easy access to the user documentation,
    | allowing users to quickly find and reference essential information about
    | the application's features and usage. These routes are designed to enhance
    | user experience by offering clear and accessible documentation directly
    | within the application.
    |
    */

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

    /*
    |--------------------------------------------------------------------------
    | Syntax Highlighting Theme Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration option allows you to specify the syntax highlighting
    | theme for code blocks within your application's documentation.
    | Choosing an appropriate theme enhances the readability and aesthetics
    | of code examples for your developers and users.
    |
    */

    'highlight_theme' => env('LDK_HIGHLIGHT_THEME', 'dark-plus'),
];
