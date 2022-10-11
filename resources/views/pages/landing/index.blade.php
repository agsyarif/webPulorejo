@extends('layouts.app')

@section('content')
    {{-- hero start --}}
    <div class="">
        <div class="w-full h-screen bg-no-repeat bg-fixed bg-cover"
            style="background-image: url('https://images.unsplash.com/photo-1442544213729-6a15f1611937?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80')">
            {{-- style="background-image: url('build/assets/images/web/hero.png')"> --}}

            <div class="w-full h-screen bg-no-repeat" data-aos="fade-up" data-aos-duration="3000"
                style="background-image: url('build/assets/images/web/desa_transparent.png')">

            </div>
            {{-- <img src="asset('build/assets/images/web/trans_landing.png')" alt=""> --}}
            {{-- <div class="mx-10 h-screen grid content-center grid-cols-2 gap-10">
                <div class="bg-green-300">
                    <p class="text-sm font-medium">Selamat datang Di Website Resmi</p>
                    <p class="text-xl font-bold">Desa Pulorejo</p>
                </div>

                <div class="bg-navy-1">
                    <h1>jnsvinujk</h1>
                </div>
            </div> --}}

        </div>

        {{-- <section class="bg-white body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                        <br class="hidden lg:inline-block">readymade gluten
                    </h1>
                    <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant
                        cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken
                        authentic tumeric truffaut hexagon try-hard chambray.</p>
                    <div class="flex justify-center">
                        <button
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        <button
                            class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero"
                        src="https://images.unsplash.com/photo-1442544213729-6a15f1611937?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80">
                </div>
            </div>
        </section> --}}
    </div>
    {{-- hero end --}}

    {{-- information start --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Menuju Desa Maju</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Melayani masyarakat secara
                    cepat, akurat dan transparan adalah komitmen kami dalam memajukan <b>Desa Pulorejo</b>. Maka website
                    publikasi
                    dan sistem informasi desa ini kami hadirkan untuk mewujudkan <b>Desa Maju & Mandiri.</b></p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-navy-1 inline-flex"></div>
                </div>
            </div>
            {{-- <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center" data-aos="fade-up"
                    data-aos-duration="3000">
                    <div id="profile_svg"
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0">

                        <svg id="my-svg" fill="none" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Profil</h2>
                        <p class="leading-relaxed text-base">{!! Str::limit($sejarah->sejarah, 150) !!}</p>
                        <a href="{{ route('profile-desa') }}" class="mt-3 text-green-500 inline-flex items-center">Learn
                            More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center" data-aos="fade-up"
                    data-aos-duration="3000">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Layanan Publik</h2>
                        <p class="leading-relaxed text-base">Bebagai layanan publik prima pemerintah desa untuk masyarakat
                            desa Pulorejo yang sejahtera</p>
                        <a class="mt-3 text-green-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center" data-aos="fade-up"
                    data-aos-duration="3000">
                    <div
                        class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Berita Desa</h2>
                        <p class="leading-relaxed text-base">berbagai informasi dan berita daam lingkup desa Pulorejo yang
                            up to date.</p>
                        <a class="mt-3 text-green-500 inline-flex items-center">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    {{-- information end --}}
    {{-- chart start --}}
    <section class="bg-gray-100 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
                data-aos="fade-up" data-aos-duration="3000">
                <h1 class="title-font sm:text-4xl text-3xl mb-2 font-medium text-navy-2">Data Dalam Desa
                    <br class="hidden lg:inline-block">
                </h1>
                <div class="flex mb-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-navy-1 inline-flex"></div>
                </div>
                <p class="mb-8 leading-relaxed">Sistem kami memungkinkan dalam melakukan pendataan secara tepat, <br>
                    akurat dan
                    akuntabel. Diolah oleh tim pendata Desa kami.</p>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Button</button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-1/6" data-aos="fade-up" data-aos-duration="3000">
                <div class="shadow-lg rounded-lg overflow-hidden">
                    <canvas class="p-10" id="chartRadar"></canvas>
                </div>
            </div>
        </div>
    </section>
    {{-- chart end --}}

    {{-- Blog berita start --}}
    {{-- <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Berita Desa</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Melayani masyarakat secara
                    cepat, akurat dan transparan adalah komitmen kami dalam memajukan <b>Desa Pulorejo</b>. Maka website
                    publikasi
                    dan sistem informasi desa ini kami hadirkan untuk mewujudkan <b>Desa Maju & Mandiri.</b></p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-navy-1 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap">
                    <div class="md:p-2 p-1 w-1/3 h-auto" data-aos="fade-up" data-aos-duration="2000">
                        <div class="flex relative md:flex-nowrap">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1442544213729-6a15f1611937?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80">
                            <div class="px-8 py-10 relative z-10 w-full bg-navy-1 opacity-60 text-white">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3"></h1>
                                <p class="leading-relaxed">sdh</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:p-2 p-1 w-2/3" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="150">
                        <div class="flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col relative">
                                <span class="font-semibold title-font text-gray-700">{{ $article[1]->category_id }}</span>
                                <span
                                    class="mt-1 text-gray-500 text-sm">{{ \Carbon\Carbon::parse($article[1]->created_at)->diffForHumans() }}</span>
                                <img src="https://images.unsplash.com/photo-1442544213729-6a15f1611937?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                    class="w-full h-full pt-4 pr-3">
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $article[1]->title }}
                                </h2>
                                <p class="leading-relaxed">{!! $article[1]->artikel !!}</p>
                                <a class="text-green-500 inline-flex items-center mt-4">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1 text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-wrap -mx-4 -my-8">
                            <div class="py-8 px-4 lg:w-1/3" data-aos="fade-up" data-aos-duration="2000">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span
                                            class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ \Carbon\Carbon::parse($article[2]->created_at)->isoFormat('MMM') }}</span>
                                        <span
                                            class="font-medium text-lg text-gray-800 title-font leading-none">{{ \Carbon\Carbon::parse($article[2]->created_at)->isoFormat('D') }}</span>
                                    </div>
                                    <div class="flex-grow pl-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-green-500 mb-1">
                                            {{ $article[2]->category_id }}
                                        </h2>
                                        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                                            {{ $article[2]->title }}
                                        </h1>
                                        <p class="leading-relaxed mb-5">{!! $article[2]->artikel !!}</p>
                                        <a class="inline-flex items-center">
                                            <img alt="blog" src="https://dummyimage.com/103x103"
                                                class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                            <span class="flex-grow flex flex-col pl-3">
                                                <span
                                                    class="title-font font-medium text-gray-900">{{ Auth::user()->name }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-8 px-4 lg:w-1/3" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="100">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span
                                            class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ \Carbon\Carbon::parse($article[3]->created_at)->isoFormat('MMM') }}</span>
                                        <span
                                            class="font-medium text-lg text-gray-800 title-font leading-none">{{ \Carbon\Carbon::parse($article[3]->created_at)->isoFormat('D') }}</span>
                                    </div>
                                    <div class="flex-grow pl-6">
                                        <h2 class="tracking-widest text-xs title-font font-medium text-green-500 mb-1">
                                            {{ $article[3]->category_id }}
                                        </h2>
                                        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                                            {{ $article[3]->title }}</h1>
                                        <p class="leading-relaxed mb-5">{!! $article[3]->artikel !!}</p>
                                        <a class="inline-flex items-center">
                                            <img alt="blog" src="https://dummyimage.com/102x102"
                                                class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                            <span class="flex-grow flex flex-col pl-3">
                                                <span
                                                    class="title-font font-medium text-gray-900">{{ $article[3]->user_id }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-8 px-4 lg:w-1/3" data-aos="fade-up" data-aos-duration="2000"
                                data-aos-delay="200">
                                <div class="h-full flex items-start">
                                    <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                        <span
                                            class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ \Carbon\Carbon::parse($article[4]->created_at)->isoFormat('MMM') }}</span>
                                        <span
                                            class="font-medium text-lg text-gray-800 title-font leading-none">{{ \Carbon\Carbon::parse($article[4]->created_at)->isoFormat('D') }}</span>
                                    </div>
                                </div>
                                <div class="flex-grow pl-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-green-500 mb-1">
                                        {{ $article[4]->category_id }}
                                    </h2>
                                    <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $article[4]->title }}
                                    </h1>
                                    <p class="leading-relaxed mb-5">{!! $article[4]->artikel !!}</p>
                                    <a class="inline-flex items-center">
                                        <img alt="blog" src="https://dummyimage.com/101x101"
                                            class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                        <span class="flex-grow flex flex-col pl-3">
                                            <span
                                                class="title-font font-medium text-gray-900">{{ $article[4]->user_id }}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="3000">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Berita Desa</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Melayani masyarakat secara
                    cepat, akurat dan transparan adalah komitmen kami dalam memajukan <b>Desa Pulorejo</b>. Maka website
                    publikasi
                    dan sistem informasi desa ini kami hadirkan untuk mewujudkan <b>Desa Maju & Mandiri.</b></p>
                <div class="flex mt-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-navy-1 inline-flex"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                {{-- @foreach ($article as $key => $a)
                    <div class="p-4 lg:w-1/3">
                        <div class="h-full rounded-lg overflow-hidden text-center relative"
                            style="background-image: url({{ asset('storage/article/thumbnail/' . $a->image) }})">
                            <div class="px-8 pt-16 pb-24 bg-navy-2 bg-opacity-75">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-100 mb-1">
                                    {{ $a->category_id }}</h2>
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-100 mb-3">
                                    {{ $a->title }}
                                </h1>
                                <p class="leading-relaxed mb-3 text-gray-100">{!! $a->artikel !!}</p>
                                <a href="#" class="text-indigo-500 inline-flex items-center">Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <div
                                    class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                                    <span
                                        class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>1.2K
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path
                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                            </path>
                                        </svg>6
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>
    {{-- blog berita end --}}

    {{-- Gallery start --}}
    <section class="text-gray-600 bg-gray-100 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-col text-center w-full mb-20" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac
                    Heirloom</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon
                    brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard
                    of them man bun deep jianbing selfies heirloom.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2" data-aos="fade-up" data-aos-duration="2000">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://dummyimage.com/600x360">
                            <div
                                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">THE
                                    SUBTITLE
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing
                                    microdosing tousled waistcoat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:p-2 p-1 w-1/2" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://dummyimage.com/600x360">
                            <div
                                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">THE
                                    SUBTITLE
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing
                                    microdosing tousled waistcoat.</p>
                            </div>
                        </div>

                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <div class="flex relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://dummyimage.com/600x360">
                            <div
                                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">THE
                                    SUBTITLE
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing
                                    microdosing tousled waistcoat.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="500">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://dummyimage.com/600x360">
                            <div
                                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 transition">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">THE
                                    SUBTITLE
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing
                                    microdosing tousled waistcoat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:p-2 p-1 w-1/2" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://dummyimage.com/600x360">
                            <div
                                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">THE
                                    SUBTITLE
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing
                                    microdosing tousled waistcoat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:p-2 p-1 w-1/2" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                        <div class="flex relative">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center"
                                src="https://dummyimage.com/600x360">
                            <div
                                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                                <h2 class="tracking-widest text-sm title-font font-medium text-green-500 mb-1">THE
                                    SUBTITLE
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                    jianbing
                                    microdosing tousled waistcoat.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Galery End --}}
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                    marginheight="0" marginwidth="0" scrolling="no"
                    src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-green-500 leading-relaxed">example@email.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">123-456-7890</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion
                    axe</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Button</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                    artisan.</p>
            </div>
        </div>
    </section>
@endsection
