<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script> --}}

    @livewireStyles
</head>

<body class="dark" style="font-family: quicksand">


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
