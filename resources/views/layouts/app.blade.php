<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @vite('resources/css/app.css')
    <!-- Styles -->
    @livewireStyles
</head>

<body class="dark">


    <div class="mx-auto">
        @include('component.header')

        <main>
            @yield('content')
        </main>

        @include('component.footer')

        @stack('modals')

    </div>
    @livewireScripts

    @include('includes.script')
</body>

</html>
