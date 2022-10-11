@extends('layouts.dekstop')

@section('title', 'Dashboard')

@section('content')


    <main class="h-full overflow-y-auto bg-gray-300">

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Data Pekerjaan
                    </h2>

                    <p class="text-sm text-gray-400">
                        {{ count($pekerjaan) }}Total Pekerjaan
                    </p>
                </div>

                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-0 md:mt-6">
                        <a href="{{ route('pekerjaan.create') }}"
                            class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-navy-1">
                            + Tambah pekerjaan
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
                                    pekerjaan
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{ count($pekerjaan) }} pekerjaan
                                </p>
                            </div>
                        </div>

                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Gambar</th>
                                    {{-- {{-- <th class="py-4" scope="">Judul</th> --}}
                                    {{-- <th class="py-4" scope=""></th> --}}
                                    {{-- <th class="py-4" scope="">Price</th> --}}
                                    {{-- <th class="py-4" scope="">Kategori </th>
                                    <th class="py-4" scope="">Waktu</th> --}}
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @if ($pekerjaan == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($pekerjaan as $item)
                                        <tr>
                                            <td class="py-4">{{ $loop->iteration }}</td>
                                            {{-- <td class="py-4 img flex">
                                                <img class="rounded-md mob:w-auto" width="100px"
                                                    src="{{ asset('storage/article/thumbnail/' . $item->image) }}"
                                                    alt="image">

                                            </td> --}}
                                            <td class="py-4">{{ $item->pekerjaan ?? '' }}</td>
                                            {{-- <td class="py-4">{{ $item->user->name ?? '' }}</td>
                                            <td class="py-4">{{ $item->category->name ?? '' }}</td> --}}
                                            {{-- <td class="py-4">
                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </td> --}}
                                            <td class="py-4 flex">
                                                <a href="{{ route('pekerjaan.show', $item->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <a href="{{ route('pekerjaan.edit', $item->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-edit"></i>
                                                </a>
                                                <form action="{{ route('pekerjaan.destroy', $item->id) }}" method="post">
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
