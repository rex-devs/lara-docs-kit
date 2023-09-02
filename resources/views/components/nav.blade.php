@props([
    'navItems' => [],
])

<ul role="list" class="border-l border-transparent">
    @foreach ($navItems as $name => $url)
        @if (is_array($url))
            <li class="relative">
                <span aria-current="page" class="flex justify-between gap-2 py-1 pr-3 text-sm transition pl-4 text-zinc-600 dark:text-zinc-400">
                    <span class="truncate"> {{ ucwords($name) }} </span>
                </span>

                <ul role="list" style="opacity:1">
                    @foreach ($url as $childName => $childUrl)
                        <li>
                            <a
                                @class([
                                    'flex justify-between gap-2 py-1 pr-3 text-sm transition pl-7',
                                    'text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white' => ! request()->is(trim($childUrl, '/')),
                                    'text-zinc-900 dark:text-white bg-zinc-900/10 dark:bg-white/5 rounded-r' => request()->is(trim($childUrl, '/')),
                                ])
                                href="{{ $childUrl }}"
                                >
                                <span class="truncate"> {{ ucwords($childName) }} </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="relative">
                <a
                    @class([
                        'flex justify-between gap-2 py-1 pr-3 text-sm transition pl-4',
                        'text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white' => ! request()->is(trim($url, '/')),
                        'text-zinc-900 dark:text-white bg-zinc-900/10 dark:bg-white/5 rounded-r' => request()->is(trim($url, '/')),
                    ])
                    href="{{ $url }}"
                    >
                    <span class="truncate"> {{ ucwords($name) }} </span>
                </a>
            </li>
        @endif
    @endforeach
</ul>