<header class="body-font absolute z-10 w-full flex-col items-center text-white bg-navy-1" style="font-family: quicksand">
    {{-- <div id="navTop" class="px-16 w-full flex bg-navy-2">
        <nav class="md:ml-auto flex font-light title-font flex-wrap items-center text-base justify-center">
            <a class="mx-2 hover:text-gray-900">Visi Misi</a><span> / </span>
            <a class="mx-2 hover:text-gray-900">Arah Kebijakan</a><span> / </span>
            <a class="mx-2 hover:text-gray-900">Dokumen</a><span> / </span>
            <a class="mx-2 hover:text-gray-900">Kontak</a>
        </nav>
    </div> --}}
    <div class="px-16 w-full flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center mb-4 md:mb-0">
            <img width="35px" src="{{ asset('storage/profile/logo.png') }}" alt="">
            {{-- <span class="ml-3 text-xl">Tailblocks</span> --}}
        </a>
        <div class="md:ml-auto text-base">
            <div class="">
                <div id="navTop" class="mb-3 w-full flex">
                    <nav class="md:ml-auto flex font-light title-font flex-wrap items-center text-base justify-center">
                        <a class="mx-2 hover:text-gray-900">Visi Misi</a><span> / </span>
                        <a class="mx-2 hover:text-gray-900">Arah Kebijakan</a><span> / </span>
                        <a class="mx-2 hover:text-gray-900">Dokumen</a><span> / </span>
                        <a class="mx-2 hover:text-gray-900">Kontak</a>
                    </nav>
                </div>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a href="{{ route('sejarah-desa') }}" class="mr-5 hover:text-gray-900">Desa</a>
                    <a>
                        <a id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar"
                            class="mr-5 hover:text-gray-900 flex">Dropdown
                            <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="hidden z-10 w-4 rounded divide-y divide-gray-100 shadow">
                            <ul class="py-1 text-sm text-navy-2 bg-transparent" aria-labelledby="dropdownNavbarButton">

                                <a href="{{ route('sejarah-desa') }}" class="block py-2 px-4 bg-transparent">Sejarah</a>

                                <a href="#"
                                    class="block py-2 px-4 dark:hover:text-white bg-transparent">Geografis</a>
                            </ul>
                        </div>
                    </a>
                    <a class="mr-5 hover:text-gray-900">Pemerintah</a>
                    <a class="mr-5 hover:text-gray-900">Statistik</a>
                    <a class="mr-5 hover:text-gray-900">Produk Layanan</a>
                    {{-- <a href="{{ route('berita') }}" class="mr-5 hover:text-gray-900">Berita</a> --}}
                    <a class="mr-5 hover:text-gray-900">Galeri</a>
                    <a href="#">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
