<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ $matter['title'] ?? config('app.name') }} </title>
        <x-lara-docs-kit::meta-data :matter="$matter" />
        <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    </head>

    <body class="flex min-h-full bg-white antialiased dark:bg-zinc-900">
        <div class="h-full lg:ml-72 xl:ml-80">
            <header class="contents lg:pointer-events-none lg:fixed lg:inset-0 lg:z-40 lg:flex">
                <div class="contents lg:pointer-events-auto lg:block lg:w-72 lg:overflow-y-auto lg:border-r lg:border-zinc-900/10 lg:px-6 lg:pb-8 lg:pt-4 lg:dark:border-white/10 xl:w-80">
                    <div class="hidden lg:flex">
                        <a href="/">
                            <x-lara-docs-kit::logo />
                        </a>
                    </div>

                    <x-lara-docs-kit::nav.desktop :navItems="$navItems" />
                </div>
            </header>
        </div>

        <div class="relative flex h-full flex-col px-4 sm:px-6 lg:px-8 w-full">
            <main class="flex-auto">
                <article class="flex h-full flex-col pb-10 pt-16">
                    <div class="w-full max-w-5xl mx-auto prose dark:prose-invert">
                        {!! $html !!}
                    </div>
                </article>
            </main>
        </div>
    </body>
</html>