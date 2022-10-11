@extends('layouts.dekstop')

@section('title', 'Dashboard')

@section('content')


    <main class="h-full overflow-y-auto bg-gray-300">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Data Penduduk
                    </h2>

                    <p class="text-sm text-gray-400">
                        Total Penduduk
                    </p>
                </div>

                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('penduduk.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                            + Tambah Penduduk
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">

            @livewire('penduduk-livewire', ['segment' => 'index'])

            {{-- <div class="grid gap-5 md:grid-cols-12">

                <main class="p-4 md:col-span-12 md:pt-0">

                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Penduduk
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{ count($penduduk) }} Penduduk
                                </p>
                            </div>
                        </div>

                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">NIK</th>
                                    <th class="py-4" scope="">Nama</th>
                                    <th class="py-4" scope="">Jenis Kelamin</th>
                                    <th class="py-4" scope="">tempat</th>
                                    <th class="py-4" scope="">Tanggal Lahir</th>
                                    <th class="py-4" scope="">Pendidikan</th>
                                    <th class="py-4" scope="">Pekerjaan</th>
                                    <th class="py-4" scope="">Agama</th>
                                    <th class="py-4" scope="">Data Masuk</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($penduduk == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($penduduk as $item)
                                        <tr>
                                            <td class="py-4">{{ $loop->iteration }}</td>
                                            <td class="py-4">{{ $item->nik ?? '' }}</td>
                                            <td class="py-4">{{ $item->name ?? '' }}</td>
                                            <td class="py-4">{{ $item->jenis_kelamin ?? '' }}</td>
                                            <td class="py-4">{{ $item->tempat ?? '' }}</td>
                                            <td class="py-4">{{ $item->ttl ?? '' }}</td>
                                            <td class="py-4">{{ $item->pendidikan->name ?? '' }}</td>
                                            <td class="py-4">{{ $item->pekerjaan->pekerjaan ?? '' }}</td>
                                            <td class="py-4">{{ $item->agama->agama ?? '' }}</td>
                                            <td class="py-4">
                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </td>
                                            <td class="py-4 flex">
                                                <a href="{{ route('penduduk.show', $item->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('penduduk.edit', $item->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-edit"></i>
                                                </a>
                                                <form action="{{ route('penduduk.destroy', $item->id) }}" method="post">
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
            </div> --}}

        </section>
    </main>

@endsection
