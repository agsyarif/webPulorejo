@extends('layouts.dekstop')

@section('title', 'Dashboard')

@section('content')


    <main class="h-full overflow-y-auto bg-gray-300">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Visi Misi Desa
                    </h2>

                    <p class="text-sm text-gray-400">
                        Pulorejo
                    </p>
                </div>
                {{-- <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('visi-misi.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                            + Tambah Misi
                        </a>
                    </div>
                </div> --}}
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">

                <main class="p-4 md:col-span-12 md:pt-0">

                    {{-- visi Desa --}}
                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Visi Desa
                                </h2>
                            </div>

                            <div class="">
                                <a href="{{ route('visi.create') }}"
                                    class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                                    Tambah
                                </a>
                            </div>
                        </div>

                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Visi Desa</th>
                                    <th class="py-4" scope="">Tanggal Update</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($visi == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($visi as $value)
                                        <tr>
                                            <td class="py-4">
                                                {{ $loop->iteration ?? '' }}</td>
                                            <td class="py-4">{{ $value->visi ?? '' }}</td>
                                            <td class="py-4">
                                                {{ \Carbon\Carbon::parse($value->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </td>
                                            <td class="py-4 flex">
                                                <a href="{{ route('visi.edit', $value->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-edit"></i>
                                                </a>
                                                <form action="{{ route('visi.destroy', $value->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="py-2 mt-2 text-red-500 hover:text-gray-800"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>

                    </div>

                    {{-- misi Desa --}}
                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Misi Desa
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{-- {{ \Carbon\Carbon::parse($sejarah->created_at)->isoFormat('dddd, D MMMM Y') }} --}}
                                </p>
                            </div>

                            <div class="">
                                <a href="{{ route('misi.create') }}"
                                    class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                                    Tambah
                                </a>
                            </div>
                        </div>

                        <div class="mt-6">
                            {{-- {!! $sejarah->sejarah !!} --}}
                        </div>


                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Misi Desa</th>
                                    <th class="py-4" scope="">Tanggal Update</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($misi == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($misi as $value)
                                        <tr>
                                            <td class="py-4">
                                                {{ $loop->iteration ?? '' }}</td>
                                            <td class="py-4">{{ $value->misi ?? '' }}</td>
                                            <td class="py-4">
                                                {{ \Carbon\Carbon::parse($value->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </td>
                                            <td class="py-4 flex">
                                                <a href="{{ route('misi.edit', $value->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-edit"></i>
                                                </a>
                                                <form action="{{ route('misi.destroy', $value->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="py-2 mt-2 text-red-500 hover:text-gray-800"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>

                    </div>

                    {{-- Tujuan Desa --}}
                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Tujuan Desa
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{-- {{ \Carbon\Carbon::parse($sejarah->created_at)->isoFormat('dddd, D MMMM Y') }} --}}
                                </p>
                            </div>

                            <div class="">
                                <a href="{{ route('tujuan.create') }}"
                                    class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                                    Tambah
                                </a>
                            </div>
                        </div>

                        <div class="mt-6">
                            {{-- {!! $sejarah->sejarah !!} --}}
                        </div>


                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Tujuan Desa</th>
                                    <th class="py-4" scope="">Misi Desa</th>
                                    <th class="py-4" scope="">Tanggal Update</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($tujuan == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($tujuan as $value)
                                        <tr>
                                            <td class="py-4">
                                                {{ $loop->iteration ?? '' }}</td>
                                            <td class="py-4">{{ $value->tujuan ?? '' }}</td>
                                            <td class="py-4">{{ $value->misi->misi ?? '' }}</td>
                                            <td class="py-4">
                                                {{ \Carbon\Carbon::parse($value->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </td>
                                            <td class="py-4 flex">
                                                <a href="{{ route('tujuan.edit', $value->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-edit"></i>
                                                </a>
                                                <form action="{{ route('tujuan.destroy', $value->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="py-2 mt-2 text-red-500 hover:text-gray-800"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>

                    </div>

                    {{-- Sasaran Desa --}}
                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Sasaran Desa
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{-- {{ \Carbon\Carbon::parse($sejarah->created_at)->isoFormat('dddd, D MMMM Y') }} --}}
                                </p>
                            </div>

                            <div class="">
                                <a href="{{ route('sasaran.create') }}"
                                    class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                                    Tambah
                                </a>
                            </div>
                        </div>

                        <div class="mt-6">
                            {{-- {!! $sejarah->sejarah !!} --}}
                        </div>


                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Sasaran Desa</th>
                                    <th class="py-4" scope="">Tujuan Desa</th>
                                    <th class="py-4" scope="">Tanggal Update</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($sasaran == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($sasaran as $value)
                                        <tr>
                                            <td class="py-4">
                                                {{ $loop->iteration ?? '' }}</td>
                                            <td class="py-4">{{ $value->sasaran ?? '' }}</td>
                                            <td class="py-4">{{ $value->tujuan->tujuan ?? '' }}</td>
                                            <td class="py-4">
                                                {{ \Carbon\Carbon::parse($value->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </td>
                                            <td class="py-4 flex">
                                                <a href="{{ route('sasaran.edit', $value->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-edit"></i>
                                                </a>
                                                <form action="{{ route('sasaran.destroy', $value->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="py-2 mt-2 text-red-500 hover:text-gray-800"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>

                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
