@extends('layouts.dekstop')

@section('title', 'Letak Geografis')

@section('content')


    <main class="h-full overflow-y-auto bg-gray-300">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Profile Desa Pulorejo
                    </h2>

                    <p class="text-sm text-gray-400">
                        {{-- {{ $geografis->count() }} Total Artikel --}}
                        Letak Geografis
                    </p>
                </div>

                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('geografis.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                            + Add
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">

                <main class="p-4 md:col-span-12 md:pt-0">

                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Letak Geografis
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{ \Carbon\Carbon::parse($geografis->created_at)->isoFormat('dddd, D MMMM Y') }}
                                </p>
                            </div>
                            <div class="">
                                <a href="{{ route('geografis.edit', [$geografis->id]) }}"
                                    class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                                    Edit
                                </a>
                            </div>
                        </div>

                        <div class="mt-5">
                            <p class="font-medium">A. {{ $geografis->title }}
                            </p>
                            <p>{!! $geografis->description !!}</p>
                        </div>
                        <div class="mt-3">
                            <p class="font-medium mb-2">B. Peta Desa Pulorejo</p>
                            <img class="px-5" src="{{ asset('storage/peta/' . $geografis->peta) }}" alt="peta desa">
                        </div>


                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
