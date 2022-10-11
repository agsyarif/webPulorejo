@extends('layouts.app')

@section('content')
    <section class="text-gray-600 body-font pt-13">

        <div class="">
            <div class="w-full h-screen bg-no-repeat bg-fixed bg-cover"
                style="background-image: url('https://images.unsplash.com/photo-1442544213729-6a15f1611937?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80')">
                {{-- style="background-image: url('build/assets/images/web/hero.png')"> --}}

                <div class="w-full h-screen bg-no-repeat" data-aos="fade-up" data-aos-duration="3000"
                    style="background-image: linear-gradient(to right, #1c4c69b9, #1c4c693f);">
                    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                        <div class="lg:flex-grow text-white md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
                            data-aos="fade-up" data-aos-duration="3000" style="padding-top: 35vh">
                            <h1 class="title-font text-white sm:text-4xl text-3xl mb-2 font-medium text-navy-2">Profile Desa
                                <br class="hidden lg:inline-block">
                            </h1>
                            <div class="flex mb-6 justify-center">
                                <div class="w-16 h-1 rounded-full bg-navy-1 inline-flex"></div>
                            </div>
                            <p class="leading-relaxed">
                                {!! Str::limit($sejarah->sejarah, 150) !!}
                            </p>
                            <div class="mt-8 flex gap-5 justify-center">
                                <a href="#profile"
                                    class="inline-flex text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Selengkapnya</a>
                                <a
                                    class="inline-flex text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Button</a>
                            </div>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-1/6" data-aos="fade-up" data-aos-duration="3000">
                            {{-- <div class="shadow-lg rounded-lg overflow-hidden">
                                <canvas class="p-10" id=""></canvas>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="text-gray-600 body-font pt-13" id="profile">
        <div class="container px-5 py-24 mx-auto">
            <a href="{{ route('sejarah-desa') }}"
                class="inline-flex text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Profile
                Desa</a>
            <a href="#profile"
                class="inline-flex text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Letak
                Geografis</a>
        </div>
    </section>
@endsection
