@if (array_key_exists('description', $matter))
    <meta name="description" content="{{ $matter['description'] }}">
@endif

@if (array_key_exists('keywords', $matter))
    <meta name="keywords" content="{{ $matter['keywords'] }}">
@endif

@if (array_key_exists('author', $matter))
    <meta name="author" content="{{ $matter['author'] }}">
@endif