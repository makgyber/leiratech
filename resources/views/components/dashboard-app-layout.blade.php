<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('layouts.dashboard.sidebar')

            <div class="flex overflow-hidden flex-col flex-1">
                @include('layouts.dashboard.header')

                <main class="overflow-y-auto overflow-x-hidden flex-1 bg-gray-200">
                    <div class="container px-6 py-8 mx-auto">
                        @if (isset($header))
                        <h3 class="mb-4 text-3xl font-medium text-gray-700">
                            {{ $header }}
                        </h3>
                        @endif
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>