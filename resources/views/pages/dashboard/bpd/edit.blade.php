@extends('layouts.dekstop')

@section('title', 'BPD')

@section('content')

    <main class="h-full overflow-y-auto bg-gray-200">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Badan Permusyawatan Desa
                    </h2>

                    <p class="text-sm text-gray-400">
                        data Badan Permusyawatan Desa (BPD) Desa Pulorejo
                    </p>

                </div>
            </div>
        </div>

        <!-- breadcrumb -->
        <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
            <ol class="inline-flex p-0 list-none">

                <li class="flex items-center">
                    <a href="#" class="text-gray-400">Data BPD</a>
                    <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                    </svg>
                </li>

                <li class="flex items-center">
                    <a href="#" class="font-medium">Edit BPD</a>
                </li>

            </ol>
        </nav>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">

                        <form action="{{ route('perangkat.update', [$perangkat->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            {{ method_field('PUT') }}
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">

                                        <div class="col-span-6">
                                            <input placeholder="Nama" type="text" name="title" id="title"
                                                autocomplete="title"
                                                class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                value="{{ $perangkat->nama }}" required>

                                            @if ($errors->has('title'))
                                                <p class="text-red-500 mb-3 text-sm">{{ $errors->first('title') }}</p>
                                            @endif

                                        </div>

                                        <div class="col-span-6 sm:col-span-3 in-wrapper">

                                            <div class="wrapper">
                                                <div class="image">
                                                    <img src="{{ asset('storage/pemerintahan/perangkat/' . $perangkat->photo) }}"
                                                        id="preview" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="icon">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                    </div>
                                                    <div class="text">
                                                        No file chosen, yet!
                                                    </div>
                                                </div>
                                                <div id="cancel-btn">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                                <div class="file-name">
                                                    {{ $perangkat->photo }}
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-span-6 sm:col-span-3">

                                            <div class="mb-4">
                                                <label class="block mb-3 font-medium text-gray-700 text-md">Jenis
                                                    Kelamin</label>

                                                <div class="flex items-center mb-4">
                                                    <input @if ($perangkat->jk == 'laki - laki') checked @endif
                                                        id="default-radio-1" type="radio" value="laki - laki"
                                                        name="jenis_kelamin"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-1"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki
                                                        -
                                                        Laki</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input @if ($perangkat->jk == 'Perempuan') checked @endif
                                                        id="default-radio-2" type="radio" value="Perempuan"
                                                        name="jenis_kelamin"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="default-radio-2"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <label class="block mb-3 font-medium text-gray-700 text-md">Pangkat</label>

                                                <div class="flex items-center mb-4">
                                                    <input @if ($perangkat->is_bpd == 0) checked @endif id="pangkat1"
                                                        type="radio" value=0 name="pangkat"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="pangkat1"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perangkat
                                                        Desa</label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input @if ($perangkat->is_bpd == 1) checked @endif id="pangkat2"
                                                        type="radio" value=1 name="pangkat"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="pangkat2"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">BPD</label>
                                                </div>
                                            </div>

                                            <div class="mb-4">
                                                <input placeholder="Jabatan" type="text" name="jabatan" id="jabatan"
                                                    autocomplete="jabatan"
                                                    class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                                                    value="{{ $perangkat->jabatan }}" required>

                                                @if ($errors->has('jabatan'))
                                                    <p class="text-red-500 mb-3 text-sm">{{ $errors->first('jabatan') }}
                                                    </p>
                                                @endif
                                            </div>

                                            <a for="thumbnail" onclick="defaultBtnActive()" id="custom-btn"
                                                class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm text-center">Choose
                                                a Image</a>
                                            <input id="thumbnail" name="thumbnail" type="file" hidden>
                                        </div>


                                    </div>
                                </div>

                                <div class="px-4 py-3 text-right sm:px-6">

                                    <a href="{{ route('bpd.index') }}" type="button"
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

    <script>
        const wrapper = document.querySelector(".wrapper");
        const divImg = document.querySelector(".image");
        const fileName = document.querySelector(".file-name");
        const defaultBtn = document.querySelector("#thumbnail");
        const customBtn = document.querySelector("#custom-btn");
        const cancelBtn = document.querySelector("#cancel-btn i");
        const img = document.querySelector("#preview");
        // const img = document.querySelector("img");
        let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

        function defaultBtnActive() {
            defaultBtn.click();
        }
        defaultBtn.addEventListener("change", function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    const result = reader.result;
                    img.src = result;
                    wrapper.classList.add("active");
                    divImg.classList.remove("displayBlock");
                    divImg.classList.add("displayNone");
                }
                cancelBtn.addEventListener("click", function() {
                    img.src = "";
                    wrapper.classList.remove("active");
                    divImg.classList.add("displayBlock");
                    divImg.classList.remove("displayNone");
                })
                reader.readAsDataURL(file);
            }
            if (this.value) {
                let valueStore = this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        });
    </script>
@endpush
