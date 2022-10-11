<header class="z-1 p-6 md:hidden">
    <div class="container flex items-center justify-between h-full mx-auto text-serv-bg dark:text-purple-300">
        {{-- <div> --}}
        {{-- <a href="{{ route('index') }}" class="flex w-20 h-20 items-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="ml-3">
            </a> --}}
        <svg viewBox="0 0 700 120" class="desktop" id="svg">
            <text x="40%" y="70%" fill="" text-anchor="middle">
                UwhCamp
            </text>
        </svg>
        {{-- <svg viewBox="0 0 700 120" class="mobile" id="svg">
            <text x="40%" y="70%" fill="" text-anchor="middle">
                Uwhcamp
            </text>
        </svg> --}}
        {{-- </div> --}}
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
</header>
