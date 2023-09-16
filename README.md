# Lara Docs Kit

Welcome to lara-docs-kit, a powerful Laravel documentation package. This package
aims to simplify the process of creating and managing documentation for your
Laravel projects.

## Installation

To get started with lara-docs-kit, follow these simple steps:

1. Install the package via Composer:

```bash
composer require rex-devs/lara-docs-kit
```

2. Publish the tailwind css file.

```bash
php artisan vendor:publish --tag=lara-docs-kit-assets
```

3. To enable the syntax highlighting the javascript package shiki is needed to
be installed in the project. It can be install via npm:

```bash
npm install shiki
```

4. A directory to store all the markdown files for the documentation will need
to be created, using the default config the following command can be used to
create the directory.

```bash
mkdir ./resources/docs
```

5. A `nav.json` file will then be needed within that directory outlining the
navigation menu.

```json
{
    "introduction": "/",
}
```

6. That's it! You're now ready to start using lara-docs-kit for your Laravel
documentation needs.

## Usage

The package is configured to run straight out the box, it adds a `/docs` route
that takes markdown files directly out of the `/resources/docs` directory and
deliveries them to the public. However, there is a config file that can be
published and changed as needed.

### Configuration

To publish the configuration file using the following command:

```bash
php artisan vendor:publish --tag=lara-docs-kit-config
```

The configuration file located at `config/lara-docs-kit.php` can then be
customised according to your project's requirements. Here is an example of a
route.

```php
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
```

### Navigation

The package also uses a `nav.json` file in the top level of the directory that
holds all the markdown files. This file allows for both top level links but also
nested links (maximum of 1 level deep).

```json
{
    "introduction": "/",
    "parent": {
        "introduction": "/parent/",
        "child": "/parent/child"
    }
}
```

## Contributing

If you find any issues or have suggestions to improve lara-docs-kit, we welcome
contributions from the community. Please feel free to submit a pull request or
open an issue.

## License

lara-docs-kit is open-source software licensed under the
[MIT license](./LICENSE).

---

We hope lara-docs-kit proves to be a valuable tool for your Laravel projects.
Should you have any questions or need assistance, don't hesitate to reach out to
us on [justin@rex-devs.co.uk](mailto:justin@rex-devs.co.uk).

Happy documenting! 😊