<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ $matter['title'] ?? config('app.name') }} </title>
        <x-lara-docs-kit::meta-data :matter="$matter" />
    </head>

    <body>
        {!! $html !!}
    </body>
</html>