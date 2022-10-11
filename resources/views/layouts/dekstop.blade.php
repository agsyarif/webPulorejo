<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Pulorejo</title>

    @method('before-style')

    @include('includes.dashboard.style')

    @method('after-style')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @vite('resources/css/app.css')
    <!-- Styles -->
    @livewireStyles
</head>

<body class="dark antialiased">

    <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">

        {{-- desktop --}}
        @include('component.dekstop.sidenav')
        {{-- desktop --}}

        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div>

        {{-- @include('components.Dashboard.mobile') --}}

        <div class="relative flex flex-col flex-1 w-full">
            {{-- @include('components.Dashboard.header') --}}
            @include('component.dekstop.header')

            {{-- @include('sweetalert::alert') --}}

            @yield('content')

        </div>

    </div>


    {{-- <div class="mx-auto"> --}}
    {{-- @include('component.header') --}}
    {{-- <main class="pt-24"> --}}
    {{-- @yield('content') --}}
    {{-- </main> --}}

    {{-- @include('component.footer') --}}

    @stack('before-script')

    @include('includes.dashboard.script')

    @stack('after-script')

    @livewireScripts

</body>

</html>
