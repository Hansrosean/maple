<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" style="background-color:#aae1c6; color:#2a0d42;">

    <div class="md:flex min-h-screen">

        {{-- Sidebar --}}
        @include('layouts.navigation')

        {{-- Main Content --}}
        <div class="flex-1 flex flex-col">

            @isset($header)
                <header class="shadow" style="background:#aae1c6; color:#2a0d42;">
                    <div class="px-6 py-4">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main class="flex-1 p-6" style="background:#aae1c6; color:#2a0d42;">
                {{ $slot }}
            </main>

        </div>

    </div>

</body>

</html>
