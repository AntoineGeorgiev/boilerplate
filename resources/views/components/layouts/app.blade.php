<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ env ('APP_NAME') ?? __('Boilerplate') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <link rel="stylesheet" href="./../../../css/tailwind.css">

        <style>[x-cloak] { display: none !important; }</style>
    </head>
    <body
        x-data="{
            menuOpen: false,
            basicSignInModal: false,
            basicSignUpModal: false,
            advanceSignInModal: false,
            advanceSignUpModal: false,
        }"
        class="flex min-h-screen custom-scrollbar">

        <x-menu.overlay />

        <x-navigation />

        <div class="flex flex-col w-full lg:pl-64">
            <x-topbar />

            <!-- start:Page content -->
            <div class="h-full p-8 bg-gray-200">
                {{ $slot }}
            </div>
            <!-- end:Page content -->
        </div>

        @livewireScripts
    </body>
</html>
