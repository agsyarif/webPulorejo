{{-- <header class="body-font fixed w-full flex-col items-center text-green-500">
    <div class="px-16 w-full flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center mb-4 md:mb-0">
            <p></p>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <div class="dropdown relative">
                <a class="text-navy-1 hover:text-gray-700 focus:text-gray-700 mr-4 dropdown-toggle hidden-arrow flex items-center bg-gray-200 p-3 rounded-lg"
                    href id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="flex items-center">
                        <div class="shrink-0 border-2">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/8.webp" class="rounded-full w-10"
                                alt="Avatar">
                        </div>
                        <div class="grow ml-3">
                            <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
                        </div>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-2" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="black"
                                d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                            </path>
                        </svg>
                    </div>
                </a>
                <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none left-auto right-0"
                    aria-labelledby="dropdownMenuButton1">
                    <li>
                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>
                    </li>
                    <li>
                        <a class="
                      dropdown-item
                      text-sm
                      py-2
                      px-4
                      font-normal
                      block
                      w-full
                      whitespace-nowrap
                      bg-transparent
                      text-gray-700
                      hover:bg-gray-100
                    "
                            href="#">Settings</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header> --}}

{{-- <div class="w-60 h-full shadow-md bg-white absolute" id="sidenavSecExample">
    <div class="pt-4 pb-2 px-6">
        <a href="#!">
            <div class="flex items-center">
                <h1 class="font-semibold text-xl">Logo Desa</h1>
            </div>
        </a>
    </div>
    <ul class="relative px-1 pt-7">
        <li class="relative">
            <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <i class="fa-solid fa-house fa-lg mr-2"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="relative">
            <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <i class="fa fa-user fa-lg mr-2"></i>
                <span>Data Penduduk</span>
            </a>
        </li>

        <li class="relative" id="sidenavSecEx3">
            <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer"
                data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                data-bs-target="#collapseSidenavSecEx3" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
                <i class="fa fa-newspaper fa-lg mr-2"></i>
                <span>Berita</span>
                <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                    </path>
                </svg>
            </a>
            <ul class="relative accordion-collapse collapse" id="collapseSidenavSecEx3" aria-labelledby="sidenavSecEx3"
                data-bs-parent="#sidenavSecExample">
                <li class="relative">
                    <a href="#!"
                        class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="primary">Artikel</a>
                </li>
                <li class="relative">
                    <a href="#!"
                        class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                        data-mdb-ripple="true" data-mdb-ripple-color="primary">Kategori</a>
                </li>
            </ul>
        </li>

        <li class="relative">
            <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <i class="fa fa-user-gear fa-lg mr-2"></i>
                <span>Profile</span>
            </a>
        </li>

        <li class="relative">
            <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                <i class="fa-regular fas fa-right-from-bracket fa-lg mr-2"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

    <div class="text-center bottom-0 absolute w-full">
        <hr class="m-0">
        <p class="py-2 text-sm text-gray-700">Pulorejo ~ Tembelang</p>
    </div>
</div> --}}

<aside class="z-20 flex-shrink-0 w-64 overflow-y-auto bg-white md:block" aria-label="aside">

    <div class="text-serv-bg">

        <a class="" href="#">
            <img src="{{ asset('storage/profile/logo.png') }}" alt="logo" class="object-center mx-auto my-4 ">
        </a>

        <div class="flex items-center pt-8 pl-5 space-x-2 border-t border-gray-100">

            @if (Auth::user()->profile_photo_path != null)

                @if (Auth::user()->profile_photo_path[0] == 'h')
                    <img src="{{ Auth::user()->profile_photo_path }}" alt="Photo Profile"
                        class="inline ml-3 h-12 w-12 rounded-full">
                @else
                    <img src="{{ asset('storage/profile/' . Auth::user()->profile_photo_path) }}" alt="Photo Profile"
                        class="inline ml-3 h-12 w-12 rounded-full">
                @endif
            @else
                <img src="https://source.unsplash.com/MP0IUfwrn0A" class="inline ml-3 h-12 w-12 rounded-full" />
            @endif

            <div>
                <!--Author name-->
                <p class="font-semibold text-gray-900 text-md">{{ Auth::user()->name ?? '' }}</p>
                <p class="text-sm font-light text-serv-text">
                    {{ Auth::user()->user_role->role ?? '' }}
                </p>
            </div>

        </div>
    </div>


    <div class="w-60 h-full shadow-md bg-white absolute" id="sidenavSecExample">

        <ul class="relative px-1 pt-7">
            <li class="relative">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                    href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                    <i class="fa-solid fa-house fa-lg mr-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="relative" id="sidenavSecEx3">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer"
                    data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                    data-bs-target="#profileDesa" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
                    <i class="fa fa-newspaper fa-lg mr-2"></i>
                    <span>Profile Desa</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                        </path>
                    </svg>
                </a>
                <ul class="relative accordion-collapse collapse" id="profileDesa" aria-labelledby="sidenavSecEx3"
                    data-bs-parent="#sidenavSecExample">
                    <li class="relative">
                        <a href="{{ route('sejarah.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Sejarah</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('visi.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Visi Misi, Tujuan, Sasaran </a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('geografis.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Letak Geografis</a>
                    </li>
                    {{-- <li class="relative">
                        <a href="{{ route('pekerjaan.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Dokumen</a>
                    </li> --}}
                </ul>
            </li>

            <li class="relative" id="sidenavSecEx3">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer"
                    data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                    data-bs-target="#pemerintahan" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
                    <i class="fa fa-newspaper fa-lg mr-2"></i>
                    <span>Pemerintahan</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                        </path>
                    </svg>
                </a>
                <ul class="relative accordion-collapse collapse" id="pemerintahan" aria-labelledby="sidenavSecEx3"
                    data-bs-parent="#sidenavSecExample">
                    <li class="relative">
                        {{-- pemerintahan --}}
                        <a href="{{ route('perangkat.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Pemerintahan</a>
                    </li>
                    <li class="relative">
                        {{-- bpd --}}
                        <a href="{{ route('bpd.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">BPD</a>
                    </li>
                </ul>
            </li>

            <li class="relative" id="sidenavSecEx3">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer"
                    data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                    data-bs-target="#collapseSidenavSecEx3" aria-expanded="false"
                    aria-controls="collapseSidenavSecEx3">
                    <i class="fa fa-newspaper fa-lg mr-2"></i>
                    <span>Data Penduduk</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                        </path>
                    </svg>
                </a>
                <ul class="relative accordion-collapse collapse" id="collapseSidenavSecEx3"
                    aria-labelledby="sidenavSecEx3" data-bs-parent="#sidenavSecExample">
                    <li class="relative">
                        <a href="{{ route('penduduk.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Data Penduduk</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('agama.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Data Agama</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('pendidikan.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Data Pendidikan</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('pekerjaan.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Data Pekerjaan</a>
                    </li>
                </ul>
            </li>

            <li class="relative" id="sidenavSecEx3">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer"
                    data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                    data-bs-target="#berita" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
                    <i class="fa fa-newspaper fa-lg mr-2"></i>
                    <span>Berita</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                        </path>
                    </svg>
                </a>
                <ul class="relative accordion-collapse collapse" id="berita" aria-labelledby="sidenavSecEx3"
                    data-bs-parent="#sidenavSecExample">
                    <li class="relative">
                        <a href="{{ route('blog.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Artikel</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('categori-blog.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Kategori</a>
                    </li>
                </ul>
            </li>

            <li class="relative" id="sidenavSecEx">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out cursor-pointer"
                    data-mdb-ripple="true" data-mdb-ripple-color="primary" data-bs-toggle="collapse"
                    data-bs-target="#profile" aria-expanded="false" aria-controls="collapseSidenavSecEx3">
                    <i class="fa fa-user-gear fa-lg mr-2"></i>
                    <span>Profile</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-3 h-3 ml-auto"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                        </path>
                    </svg>
                </a>
                <ul class="relative accordion-collapse collapse" id="profile" aria-labelledby="sidenavSecEx3"
                    data-bs-parent="#sidenavSecExample">
                    <li class="relative">
                        <a href="{{ route('profile.index') }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Profile Information</a>
                    </li>
                    <li class="relative">
                        <a href="{{ route('profile.show', Auth::user()->id) }}"
                            class="flex items-center text-xs py-4 pl-12 pr-6 h-6 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-blue-600 hover:bg-blue-50 transition duration-300 ease-in-out"
                            data-mdb-ripple="true" data-mdb-ripple-color="primary">Profile Photo</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="relative">
                <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                    href="{{ route('profile.index') }}" data-mdb-ripple="true" data-mdb-ripple-color="primary">
                    <i class="fa fa-user-gear fa-lg mr-2"></i>
                    <span>Profile</span>
                </a>
            </li> --}}

            <li class="relative">
                <form method="POST" action="{{ route('logout') }}" x-data>
                    {{-- <a class="flex items-center text-sm py-4 px-6 h-12 overflow-hidden text-gray-700 text-ellipsis whitespace-nowrap rounded hover:text-gray-900 hover:bg-green-50 transition duration-300 ease-in-out"
                        href="#!" data-mdb-ripple="true" data-mdb-ripple-color="primary"> --}}
                    @csrf
                    {{-- <span>Logout</span> --}}

                    <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <i class="fa-regular fas fa-right-from-bracket fa-lg ml-2"></i>
                        {{ __('Log Out') }}
                    </x-jet-dropdown-link>
                    {{-- </a> --}}
                </form>
            </li>

        </ul>
        <div class="text-center bottom-0 absolute w-full">
            <hr class="m-0">
            <p class="py-2 text-sm text-gray-700">Pulorejo ~ Tembelang</p>
        </div>
    </div>
</aside>
