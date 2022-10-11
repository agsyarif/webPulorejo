@extends('layouts.dekstop')

@section('title', 'Tambah Data Penduduk')

@section('content')

    <main class="h-full overflow-y-auto bg-gray-200">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Edit Data Penduduk
                    </h2>

                    <p class="text-sm text-gray-400">
                        Edit Data penduduk for your provide
                    </p>

                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">

                <li class="flex items-center">
                    <a href="#" class="text-gray-400">Data Penduduk</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>

                <li class="flex items-center">
                    <a href="#" class="font-medium">Edit Data Penduduk</a>
                </li>

            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                        {{--
                        @livewire('penduduk-livewire', ['segment' => 'edit']) --}}

                        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            {{ method_field('PUT') }}
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="sm:col-span-3">
                                            <input placeholder="NIK (nomor Induk Kependudukan)" type="text"
                                                name="nik" id="nik" autocomplete="title"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $penduduk->nik }}" required>

                                            @error('nik')
                                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="sm:col-span-3">
                                            <input placeholder="No KK (Kartu Keluarga)" type="text" name="no_kk"
                                                id="no_kk" autocomplete="title"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $penduduk->kk }}" required>

                                            @error('no_kk')
                                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <input placeholder="Nama" type="text" name="nama" id="nama"
                                                autocomplete="nama"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $penduduk->nama }}" required>

                                            @if ($errors->has('nama'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('nama') }}</p>
                                            @endif

                                        </div>

                                        <div class="sm:col-span-3">

                                            <label class="block mb-3 font-medium text-gray-700 text-md">Jenis
                                                Kelamin</label>


                                            <div class="flex items-center mb-4">
                                                @if ($penduduk->kelamin == 'laki - laki')
                                                @endif
                                                <input @if ($penduduk->kelamin == 'laki - laki') checked @endif id="default-radio-1"
                                                    type="radio" value="laki - laki" name="jenis_kelamin"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-1"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki -
                                                    Laki</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input @if ($penduduk->kelamin == 'Perempuan') checked @endif id="default-radio-2"
                                                    type="radio" value="Perempuan" name="jenis_kelamin"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="default-radio-2"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <input placeholder="Tempat Lahir" type="text" name="tempat_lahir"
                                                id="tempat_lahir" autocomplete="tempat_lahir"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $penduduk->tempat_lahir }}" required>

                                            @if ($errors->has('tempat_lahir'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('tempat_lahir') }}
                                                </p>
                                            @endif

                                            <input placeholder="Tanggal Lahir" type="date" name="tgl_lahir"
                                                id="tgl_lahir" autocomplete="tgl_lahir"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $penduduk->tgl_lahir }}" required>

                                            @if ($errors->has('tgl_lahir'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('tgl_lahir') }}</p>
                                            @endif

                                        </div>

                                        <div class="sm:col-span-3">
                                            <div class="flex space-x-2">
                                                <select id="provinsi" name="provinsi_id" autocomplete="provinsi"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    wire:click="selectProvinsi($event.target.value)" required>

                                                    <option>
                                                        -- Provinsi --
                                                    </option>

                                                    @foreach ($provinsi as $ctg)
                                                        @if ($penduduk->id_provinsi == $ctg->id)
                                                            <option value={{ $ctg->id }} selected>{{ $ctg->name }}
                                                            </option>
                                                        @else
                                                            <option value={{ $ctg->id }}>{{ $ctg->name }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>

                                                @error('provinsi_id')
                                                    <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div>

                                        {{-- <div class="sm:col-span-3">
                                            <div class="flex space-x-2">
                                                <select id="kota" name="kota_id" autocomplete="kota"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    wire:click="selectKota($event.target.value)" required>


                                                    @if ($kota != null)
                                                        <option selected>-- Kabupaten / Kota --</option>
                                                        @foreach ($kota as $ctg)
                                                            @if ($penduduk->id_kota == $ctg->id)
                                                                <option value={{ $ctg->id }} selected>
                                                                    {{ $ctg->name }}
                                                                </option>
                                                            @else
                                                                <option value={{ $ctg->id }}>{{ $ctg->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                </select>

                                                @error('kabupaten_id')
                                                    <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div> --}}

                                        {{-- <div class="sm:col-span-3">
                                            <div class="flex space-x-2">
                                                <select id="kecamatan" name="kecamatan_id" autocomplete="kecamatan"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    wire:click="selectKecamatan($event.target.value)" required>


                                                    @if ($kecamatan != null)
                                                        <option selected>-- Kecamatan --</option>
                                                        @foreach ($kecamatan as $ctg)
                                                            @if ($penduduk->id_kecamatan == $ctg->id)
                                                                <option value={{ $ctg->id }} selected>
                                                                    {{ $ctg->name }}
                                                                </option>
                                                            @else
                                                                <option value={{ $ctg->id }}>{{ $ctg->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                </select>

                                                @error('kecamatan_id')
                                                    <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div> --}}

                                        {{-- <div class="sm:col-span-3">
                                            <div class="flex space-x-2">
                                                <select id="kelurahan" name="kelurahan_id" autocomplete="kelurahan"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    wire:click="selectKelurahan($event.target.value)" required>


                                                    @if ($kelurahan != null)
                                                        <option selected>-- Desa --</option>
                                                        @foreach ($kelurahan as $ctg)
                                                            @if ($penduduk->id_kelurahan == $ctg->id)
                                                                <option value={{ $ctg->id }} selected>
                                                                    {{ $ctg->name }}
                                                                </option>
                                                            @else
                                                                <option value={{ $ctg->id }}>{{ $ctg->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                </select>
                                                @error('kelurahan_id')
                                                    <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                                                @enderror

                                            </div>

                                        </div> --}}

                                        <div class="col-span-6 sm:col-span-3">

                                            <div class="flex space-x-2">
                                                <select id="pendidikan" name="pendidikan_id" autocomplete="pendidikan"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    required>

                                                    <option>Pendidikan Terakhir</option>

                                                    @foreach ($pendidikan as $ctg)
                                                        @if ($penduduk->id_pendidikan == $ctg->id)
                                                            <option value={{ $ctg->id }} selected>
                                                                {{ $ctg->pendidikan }}
                                                            </option>
                                                        @else
                                                            <option value={{ $ctg->id }}>{{ $ctg->pendidikan }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>

                                                @if ($errors->has('pendidikan_id'))
                                                    <p class="text-red-500 mb-3 text-sm">
                                                        {{ $errors->first('category_id') }}</p>
                                                @endif

                                                <a href="{{ route('pendidikan.create') }}"
                                                    class="rounded-lg mt-1 p-2 flex items-center"
                                                    style="background-color: rgb(185, 185, 185)">
                                                    <svg width="20" height="20" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">

                                            <div class="flex space-x-2">
                                                <select id="agama" name="agama_id" autocomplete="agama"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    required>

                                                    <option>Agama</option>

                                                    @foreach ($agama as $ctg)
                                                        @if ($penduduk->id_agama == $ctg->id)
                                                            <option value={{ $ctg->id }} selected>{{ $ctg->agama }}
                                                            </option>
                                                        @else
                                                            <option value={{ $ctg->id }}>{{ $ctg->agama }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>

                                                @if ($errors->has('agama_id'))
                                                    <p class="text-red-500 mb-3 text-sm">
                                                        {{ $errors->first('agama_id') }}</p>
                                                @endif

                                                <a href="{{ route('agama.create') }}"
                                                    class="rounded-lg mt-1 p-2 flex items-center"
                                                    style="background-color: rgb(185, 185, 185)">
                                                    <svg width="20" height="20" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                                    </svg>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">

                                            <div class="flex space-x-2">
                                                <select id="pekerjaan" name="pekerjaan_id" autocomplete="pekerjaan"
                                                    class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                    required>

                                                    <option>Pekerjaan</option>

                                                    @foreach ($pekerjaan as $ctg)
                                                        @if ($penduduk->id_pekerjaan == $ctg->id)
                                                            <option value={{ $ctg->id }} selected>
                                                                {{ $ctg->pekerjaan }}
                                                            </option>
                                                        @else
                                                            <option value={{ $ctg->id }}>{{ $ctg->pekerjaan }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>

                                                @if ($errors->has('pekerjaan_id'))
                                                    <p class="text-red-500 mb-3 text-sm">
                                                        {{ $errors->first('pekerjaan_id') }}</p>
                                                @endif

                                                <a href="{{ route('pekerjaan.create') }}"
                                                    class="rounded-lg mt-1 p-2 flex items-center"
                                                    style="background-color: rgb(185, 185, 185)">
                                                    <svg width="20" height="20" fill="currentColor"
                                                        aria-hidden="true">
                                                        <path
                                                            d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                                    </svg>
                                                </a>
                                                {{-- <a href="/new" class="hover:bg-blue-400 group flex items-center rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
                                                            <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
                                                              <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                                            </svg>
                                                            New
                                                          </a> --}}
                                            </div>

                                        </div>


                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">

                                    <a href="{{ route('penduduk.index') }}" type="button"
                                        class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300"
                                        onclick="return confirm('Are you sure want to cancel? , Any changes you make will not be saved !')">
                                        Cancel
                                    </a>

                                    <button type="submit"
                                        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
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
@endpush
