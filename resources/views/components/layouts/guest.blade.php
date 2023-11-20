<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ env ('APP_NAME') ?? __('Login') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link rel="stylesheet" href="./../../../css/tailwind.css">

        <style>[x-cloak] { display: none !important; }</style>
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
    </body>
</html>
