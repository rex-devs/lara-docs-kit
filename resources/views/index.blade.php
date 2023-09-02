<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ $matter['title'] ?? config('app.name') }} </title>
        <x-lara-docs-kit::meta-data :matter="$matter" />
        <link href="{{ asset('lara-docs-kit/css/app.css') }}" rel="stylesheet" />
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

                    <div class="fixed inset-x-0 top-0 z-50 flex h-14 items-center justify-between gap-12 px-4 transition sm:px-6 lg:left-72 lg:z-30 lg:px-8 xl:left-80 backdrop-blur-sm dark:backdrop-blur lg:left-72 xl:left-80 bg-white/[var(--bg-opacity-light)] dark:bg-zinc-900/[var(--bg-opacity-dark)] lg:hidden" style="--bg-opacity-light: 0.5; --bg-opacity-dark: 0.2;">
                        <div class="flex items-center gap-5 lg:hidden">
                            <button type="button" class="flex h-6 w-6 items-center justify-center rounded-md transition hover:bg-zinc-900/5 dark:hover:bg-white/5" onclick="document.getElementById('mobile-nav').classList.toggle('hidden'); document.documentElement.classList.toggle('overflow-hidden')" aria-label="Toggle navigation">
                                <svg viewBox="0 0 10 9" fill="none" stroke-linecap="round" aria-hidden="true" class="w-2.5 stroke-zinc-900 dark:stroke-white">
                                    <path d="M.5 1h9M.5 8h9M.5 4.5h9"></path>
                                </svg>
                            </button>
                            
                            <a aria-label="Home" href="/">
                                <x-lara-docs-kit::logo h="h-6" w="w-auto" />
                            </a>
                        </div>
                    </div>
                    
                    <div id="mobile-nav" class="z-10 hidden fixed bottom-0 left-0 top-14 w-full overflow-y-auto bg-white px-4 pb-4 pt-6 shadow-lg shadow-zinc-900/10 ring-1 ring-zinc-900/7.5 dark:bg-zinc-900 dark:ring-zinc-800 min-[416px]:max-w-sm sm:px-6 sm:pb-10 translate-x-0" data-projection-id="128">
                        <nav>
                            <x-lara-docs-kit::nav :navItems="$navItems" />
                        </nav>
                    </div>
                
                    <nav class="hidden lg:mt-10 lg:block">
                        <div class="relative mt-3 pl-2">
                            <div class="absolute inset-y-0 left-2 w-px bg-zinc-900/10 dark:bg-white/5"></div>

                            <x-lara-docs-kit::nav :navItems="$navItems" />
                        </div>
                    </nav>
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