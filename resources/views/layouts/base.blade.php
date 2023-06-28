<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head />
    <style>
        .gradient {
            background: linear-gradient(90deg, #430e47e0 0%, #0a2b49 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient">
    <x-partials.nav />
    {{-- <x-ui.alert /> --}}
    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        {{ $slot }}
    </div>




    <x-partials.footer />

        {{-- @livewireScripts --}}

    <livewire:scripts>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/dropdown.js') }}"></script>
</body>

</html>