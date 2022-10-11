<div>
    {{-- Do your work, then step back. --}}
    {{-- action="{{ route('penduduk.store') }}" method="POST" enctype="multipart/form-data" --}}
    <form wire:submit.prevent="submit">
        @csrf

        <div class="">
            <div class="px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">

                    <div class="col-span-6 sm:col-span-3">
                        <input placeholder="NIK (nomor Induk Kependudukan)" type="text" name="nik" id="nik"
                            autocomplete="title"
                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            value="{{ old('nik') }}" required wire:model="nik">

                        @error('nik')
                            <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <input placeholder="No KK (Kartu Keluarga)" type="text" name="no_kk" id="no_kk"
                            autocomplete="title"
                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            value="{{ old('no_kk') }}" required wire:model="no_kk">

                        @error('no_kk')
                            <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <input placeholder="Nama" type="text" name="nama" id="nama" autocomplete="nama"
                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            value="{{ old('nama') }}" required wire:model="nama">

                        @error('nama')
                            <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="sm:col-span-3">

                        <label class="block mb-3 font-medium text-gray-700 text-md">Jenis
                            Kelamin</label>

                        <div class="flex items-center mb-4">
                            <input id="default-radio-1" type="radio" value="laki - laki" name="jenis_kelamin"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                wire:model="jenis_kelamin">
                            <label for="default-radio-1"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki -
                                Laki</label>
                        </div>
                        <div class="flex items-center">
                            <input id="default-radio-2" type="radio" value="Perempuan" name="jenis_kelamin"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                wire:model="jenis_kelamin">
                            <label for="default-radio-2"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>

                        @error('jenis_kelamin')
                            <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <input placeholder="Tempat Lahir" type="text" name="tempat_lahir" id="tempat_lahir"
                            autocomplete="tempat_lahir"
                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            value="{{ old('tempat_lahir') }}" required wire:model="tempat_lahir">

                        @error('tempat_lahir')
                            <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                        @enderror

                        <input placeholder="Tanggal Lahir" type="date" name="tgl_lahir" id="tgl_lahir"
                            autocomplete="tgl_lahir"
                            class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            value="{{ old('tgl_lahir') }}" wire:model="tgl_lahir" required>

                        @error('tgl_lahir')
                            <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                        @enderror

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
                                    @if (old('provinsi_id') == $ctg->id)
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

                    <div class="sm:col-span-3">
                        <div class="flex space-x-2">
                            <select id="kota" name="kota_id" autocomplete="kota"
                                class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                wire:click="selectKota($event.target.value)" required>


                                @if ($kota != null)
                                    <option selected>-- Kabupaten / Kota --</option>
                                    @foreach ($kota as $ctg)
                                        @if (old('kota_id') == $ctg->id)
                                            <option value={{ $ctg->id }} selected>{{ $ctg->name }}
                                            </option>
                                        @else
                                            <option value={{ $ctg->id }}>{{ $ctg->name }}</option>
                                        @endif
                                    @endforeach
                                @endif

                            </select>

                            @error('kabupaten_id')
                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>

                    <div class="sm:col-span-3">
                        <div class="flex space-x-2">
                            <select id="kecamatan" name="kecamatan_id" autocomplete="kecamatan"
                                class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                wire:click="selectKecamatan($event.target.value)" required>


                                @if ($kecamatan != null)
                                    <option selected>-- Kecamatan --</option>
                                    @foreach ($kecamatan as $ctg)
                                        @if (old('kecamatan_id') == $ctg->id)
                                            <option value={{ $ctg->id }} selected>{{ $ctg->name }}
                                            </option>
                                        @else
                                            <option value={{ $ctg->id }}>{{ $ctg->name }}</option>
                                        @endif
                                    @endforeach
                                @endif

                            </select>

                            @error('kecamatan_id')
                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>

                    <div class="sm:col-span-3">
                        <div class="flex space-x-2">
                            <select id="kelurahan" name="kelurahan_id" autocomplete="kelurahan"
                                class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                wire:click="selectKelurahan($event.target.value)" required>


                                @if ($kelurahan != null)
                                    <option selected>-- Desa --</option>
                                    @foreach ($kelurahan as $ctg)
                                        @if (old('kelurahan_id') == $ctg->id)
                                            <option value={{ $ctg->id }} selected>{{ $ctg->name }}
                                            </option>
                                        @else
                                            <option value={{ $ctg->id }}>{{ $ctg->name }}</option>
                                        @endif
                                    @endforeach
                                @endif

                            </select>
                            @error('kelurahan_id')
                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>

                    <div class="col-span-6 sm:col-span-3">

                        <div class="flex space-x-2">
                            <select id="pendidikan" name="pendidikan_id" autocomplete="pendidikan"
                                class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                wire:model="pendidikan_id" required>

                                <option>-- Pendidikan Terakhir --</option>

                                @if ($kota != null)
                                    @foreach ($pendidikan as $ctg)
                                        @if (old('pendidikan_id') == $ctg->id)
                                            <option value={{ $ctg->id }} selected>{{ $ctg->pendidikan }}
                                            </option>
                                        @else
                                            <option value={{ $ctg->id }}>{{ $ctg->pendidikan }}</option>
                                        @endif
                                    @endforeach
                                @endif

                            </select>

                            @error('pendidikan_id')
                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                            @enderror

                            <a href="{{ route('pendidikan.create') }}" class="rounded-lg mt-1 p-2 flex items-center"
                                style="background-color: rgb(185, 185, 185)">
                                <svg width="20" height="20" fill="currentColor" aria-hidden="true">
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
                                wire:model="agama_id" required>

                                <option>-- Agama --</option>

                                @foreach ($agama as $ctg)
                                    @if (old('category_id') == $ctg->id)
                                        <option value={{ $ctg->id }} selected>{{ $ctg->agama }}
                                        </option>
                                    @else
                                        <option value={{ $ctg->id }}>{{ $ctg->agama }}</option>
                                    @endif
                                @endforeach

                            </select>

                            @error('agama_id')
                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                            @enderror

                            <a href="{{ route('agama.create') }}" class="rounded-lg mt-1 p-2 flex items-center"
                                style="background-color: rgb(185, 185, 185)">
                                <svg width="20" height="20" fill="currentColor" aria-hidden="true">
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
                                wire:model="pekerjaan_id" required>

                                <option>-- Pekerjaan --</option>

                                @foreach ($pekerjaan as $ctg)
                                    @if (old('category_id') == $ctg->id)
                                        <option value={{ $ctg->id }} selected>
                                            {{ $ctg->pekerjaan }}
                                        </option>
                                    @else
                                        <option value={{ $ctg->id }}>{{ $ctg->pekerjaan }}
                                        </option>
                                    @endif
                                @endforeach

                            </select>

                            @error('pekerjaan_id')
                                <span class="text-red-500 mb-3 text-sm">{{ $message }}</span>
                            @enderror

                            <a href="{{ route('pekerjaan.create') }}" class="rounded-lg mt-1 p-2 flex items-center"
                                style="background-color: rgb(185, 185, 185)">
                                <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
                                </svg>
                            </a>

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

                <button
                    class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"
                    onclick="confirm('Are you sure?!') || event.stopImmediatePropagation();">
                    Suubmit
                </button>

            </div>
        </div>
    </form>
</div>
