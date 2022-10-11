@extends('layouts.app')

@section('content')
    <section class="text-gray-600 body-font pt-20 ">
        <div class="container px-5 py-24 mx-auto">

            <div class="lg:flex-grow text-navy-1 md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center"
                data-aos="fade-up" data-aos-duration="1000">
                <h1 class="title-font sm:text-4xl text-3xl mb-2 font-medium text-navy-2">Profile Desa
                    <br class="hidden lg:inline-block">
                </h1>
                <div class="flex mb-6 justify-center">
                    <div class="w-16 h-1 rounded-full bg-navy-1 inline-flex"></div>
                </div>
            </div>
            <div class="container leading-relaxed" data-aos="fade-up" data-aos-duration="2000">
                {!! $sejarah->sejarah !!}
            </div>
            <div class="py-4" data-aos="fade-up" data-aos-duration="2000">
                <a href="#profile"
                    class="inline-flex text-white bg-navy-1 border-0 py-2 px-6 focus:outline-none hover:bg-navy-2 rounded text-lg">Letak
                    Geografis</a>
            </div>

        </div>
    </section>
@endsection
