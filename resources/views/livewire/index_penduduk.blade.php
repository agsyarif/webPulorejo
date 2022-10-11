<div class="">

    <div class="grid gap-5 md:grid-cols-12">
        <main class="md:col-span-12 p-4 md:pt-0">
            <div class="px-6 py-2 mt-2 bg-white rounded-lg">
                <div class="overflow-x-auto pt-6 pb-6 relative shadow-md sm:rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>

                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" wire:model.debounce.300ms="search" id="table-search-users"
                                class="block p-2 pl-10 w-80 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                    <table class="w-full
                                mt-4" aria-label="Table">
                        <thead>
                            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                <th class="py-4" scope="">No</th>
                                <th class="py-4" scope="">Nama</th>
                                <th class="py-4" scope="">Jenis Kelamin</th>
                                <th class="py-4" scope="">Tempat</th>
                                <th class="py-4" scope="">Tanggal Lahir</th>
                                <th class="py-4" scope="">Pendidikan</th>
                                <th class="py-4" scope="">Pekerjaan</th>
                                <th class="py-4" scope="">Agama</th>
                                <th class="py-4" scope="">Data Masuk</th>
                                <th class="py-4" scope="">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr>
                                <td colspan="6" class="text-center">
                                    <div wire:loading.block wire:target="search" class="alert alert-warning"
                                        role="alert">
                                        Sedang mencari data...
                                    </div>
                                </td>
                            </tr>
                            <div wire:loading.remove wire:target="search">
                                @forelse ($data as $key => $item)
                                    <tr>
                                        <td class="py-4">{{ $loop->iteration }}</td>
                                        <td class="py-4">{{ $item->nama ?? '' }}</td>
                                        <td class="py-4">{{ $item->kelamin ?? '' }}</td>
                                        <td class="py-4">{{ $item->tempat_lahir ?? '' }}</td>
                                        <td class="py-4">
                                            {{ \Carbon\Carbon::parse($item->tgl_lahir)->isoFormat('dddd, D MMMM Y') }}
                                        </td>
                                        <td class="py-4">{{ $item->pekerjaan->pekerjaan ?? '' }}</td>
                                        <td class="py-4">{{ $item->pendidikan->pendidikan ?? '' }}</td>
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

                                    {{-- <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                        <td class="py-4 px-6">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $men->name ?? '-' }}
                                        </td>
                                        <th scope="row"
                                            class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">

                                            @if ($men->user->profile_photo_path != null)
                                                <img class="w-10 h-10 rounded-full"
                                                    src="{{ url($men->user->profile_photo_path) }}" alt="thumbnail"
                                                    loading="lazy" />
                                            @else
                                                <img class="w-10 h-10 rounded-full"
                                                    src="{{ url('https://randomuser.me/api/portraits/men/3.jpg') }}"
                                                    alt="" loading="lazy" />
                                            @endif

                                            <div class="ml-2">
                                                <div class="text-base font-semibold">{{ $men->user->name ?? '-' }}</div>
                                                <div class="font-normal text-gray-500">{{ $men->user->email ?? '-' }}
                                                </div>
                                            </div>
                                        </th>
                                        <td class="py-4 px-6">
                                            {{ $men->course_caregory->name ?? '-' }}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ $men->price ?? '-' }}
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center">
                                                @if ($men->is_published == 0)
                                                    <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div>
                                                    <span class="text-red-400">
                                                        Non Active
                                                    </span>
                                                @elseif ($men->is_published == 1)
                                                    <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>

                                                    <span class="text-green-400">
                                                        Active
                                                    </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            {{ \Carbon\Carbon::parse($men->created_at)->diffForHumans() }}
                                        </td>
                                        <td class="pb-3 px-6">
                                            <div class="flex items-center gap-2">
                                                <a href="{{ route('admin.course.edit', $men['id']) }}"
                                                    class="py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                                <form action="{{ route('admin.course.destroy', $men->id) }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="py-2 mt-2 text-red-500 hover:text-gray-800"
                                                        onclick="return confirm('Are you sure?')">
                                                        <i class="fa-regular fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr> --}}
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center pt-4">
                                            <p class="text-gray-500">
                                                Data Tidak Ditemukan
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse
                            </div>
                        </tbody>
                    </table>
                </div>

            </div>
        </main>
    </div>

</div>
