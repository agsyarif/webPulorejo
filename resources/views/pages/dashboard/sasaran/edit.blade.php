@extends('layouts.dekstop')

@section('title', 'Sasaran Desa')

@section('content')

    <main class="h-full overflow-y-auto bg-gray-200">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Profile Desa Pulorejo
                    </h2>

                    <p class="text-sm text-gray-400">
                        Edit Sasaran Desa
                    </p>

                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">

                <li class="flex items-center">
                    <a href="#" class="text-gray-400">Profile Desa</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>

                <li class="flex items-center">
                    <a href="#" class="font-medium">Edit Sasaran Desa</a>
                </li>

            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('sasaran.update', [$sasaran->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            {{ method_field('PUT') }}
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6 sm:col-span-3">

                                            <label for="description"
                                                class="block mb-3 font-medium text-gray-700 text-md">Tujuan Desa</label>

                                            <div class="flex space-x-2">
                                                <select id="tujuan" name="tujuan_id" autocomplete="tujuan"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    required>

                                                    @foreach ($tujuan as $ctg)
                                                        @if ($sasaran->tujuan_id == $ctg->id)
                                                            <option value={{ $ctg->id }} selected>{{ $ctg->tujuan }}
                                                            </option>
                                                        @else
                                                            <option value={{ $ctg->id }}>{{ $ctg->tujuan }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-span-6">
                                            <label for="description"
                                                class="block mb-3 font-medium text-gray-700 text-md">Sasaran Desa</label>

                                            <input placeholder="Judul Sejarah" type="text" name="title" id="title"
                                                autocomplete="title"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $sasaran->sasaran }}" required>

                                            @if ($errors->has('title'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('title') }}</p>
                                            @endif

                                        </div>

                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">

                                    <a href="{{ route('visi.index') }}" type="button"
                                        class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                        onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved !')">
                                        Cancel
                                    </a>

                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-navy-2 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                                        onclick="return confirm('Are you sure want to submit this data ?')">
                                        Create
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection

@push('after-script')
    <script src="https://cdn.tiny.cloud/1/29sxs5fei0969gl2e338ebicz8rgy8pck9ixs2hedomf7c5n/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        // tinymce.init({
        //     selector: '#sejarah',
        // });

        var isi = document.querySelector('#isi').value;
        tinymce.init({
            selector: '#sejarah',
            setup: function(editor) {
                document.getElementById('')
                editor.on('init', function(e) {
                    editor.setContent(isi);
                });
            }
        });
    </script>
@endpush
