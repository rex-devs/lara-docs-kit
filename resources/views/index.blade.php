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

    <body>
        <div class="mx-auto prose lg:prose-xl">
            {!! $html !!}
        </div>
    </body>
</html>