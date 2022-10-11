@extends('layouts.dekstop')

@section('title', 'Dashboard')

@section('content')


    <main class="h-full overflow-y-auto bg-gray-300">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Sejarah Desa
                    </h2>

                    <p class="text-sm text-gray-400">
                        Pulorejo
                    </p>
                </div>
                {{-- <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('sejarah.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                            + Tambah Sejarah
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">

                <main class="p-4 md:col-span-12 md:pt-0">

                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    title = {{ $sejarah->title }}
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{ \Carbon\Carbon::parse($sejarah->created_at)->isoFormat('dddd, D MMMM Y') }}
                                </p>
                            </div>

                            <div class="">
                                <a href="{{ route('sejarah.edit', [$sejarah->id]) }}"
                                    class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                                    Edit
                                </a>
                            </div>
                        </div>

                        <div class="mt-6">
                            {!! $sejarah->sejarah !!}
                        </div>


                        {{-- <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Judul</th>
                                    <th class="py-4" scope="">sejarah</th>
                                    <th class="py-4" scope="">Tanggal Update</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($sejarah == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="py-4">{{ $sejarah->title ?? '' }}</td>
                                        <td class="py-4">{{ $sejarah->sejarah ?? '' }}</td>
                                        <td class="py-4">
                                            {{ \Carbon\Carbon::parse($sejarah->created_at)->isoFormat('dddd, D MMMM Y') }}
                                        </td>
                                        <td class="py-4 flex">
                                            <a href="{{ route('penduduk.show', $sejarah->id) }}"
                                                class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                <i class="fa-regular fa-eye"></i>
                                            </a>
                                            <a href="{{ route('penduduk.edit', $sejarah->id) }}"
                                                class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                <i class="fa-regular fa-edit"></i>
                                            </a>
                                            <form action="{{ route('penduduk.destroy', $sejarah->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="py-2 mt-2 text-red-500 hover:text-gray-800"
                                                    onclick="return confirm('Are you sure?')">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif


                            </tbody>
                        </table> --}}

                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
