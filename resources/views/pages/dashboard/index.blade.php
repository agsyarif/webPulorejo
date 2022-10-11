@extends('layouts.dekstop')

@section('title', 'Dashboard')

@section('content')


    <main class="h-full overflow-y-auto bg-gray-300">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">

                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Overviews
                    </h2>

                    <p class="text-sm text-gray-400">
                        Monthly Reports
                    </p>

                </div>

                <div class="col-span-4 text-right">
                    <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">

                        <button
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-white rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4">

                            @if (Auth::user()->profile_photo_path != null)

                                @if (Auth::user()->profile_photo_path[0] == 'h')
                                    <img src="{{ Auth::user()->profile_photo_path }}" alt="Photo Profile"
                                        class="inline ml-3 h-12 w-12 rounded-full">
                                @else
                                    <img src="{{ asset('images/profile/' . Auth::user()->profile_photo_path) }}"
                                        alt="Photo Profile" class="inline ml-3 h-12 w-12 rounded-full">
                                @endif
                            @else
                                <img src="https://source.unsplash.com/MP0IUfwrn0A"
                                    class="inline ml-3 h-12 w-12 rounded-full" />
                            @endif

                            Halo, {{ Auth::user()->name }}

                        </button>

                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">

                <main class="p-4 lg:col-span-7 md:col-span-12 md:pt-0">
                    <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">

                        <div
                            class="hover:rotate-1 transition-all flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/services-completed-icon.svg') }}" alt=""
                                        class="w-8 h-8">
                                </div>

                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">3</p>

                                <p class="text-sm text-left text-gray-500">
                                    All <br class="hidden lg:block">
                                    Course
                                </p>

                            </div>
                        </div>

                        <div class="hover:rotate-1 flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/new-freelancer-icon.svg') }}" alt=""
                                        class="w-8 h-8">
                                </div>

                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">4</p>

                                <p class="text-sm text-left text-gray-500">
                                    All <br class="hidden lg:block">Mentor
                                </p>
                            </div>
                        </div>

                        <div class="hover:rotate-1 flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>

                                <div>
                                    <img src="{{ asset('/assets/images/new-freelancer-icon.svg') }}" alt=""
                                        class="w-8 h-8">
                                </div>

                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">5</p>

                                <p class="text-sm text-left text-gray-500">
                                    All <br class="hidden lg:block">Members
                                </p>

                            </div>
                        </div>

                    </div>

                    <div class="p-6 mt-8 bg-white rounded-xl">

                        <div class="flex justify-between">
                            <div>
                                <h2 class="mb-1 text-xl font-semibold">
                                    Checkout Log
                                </h2>

                                <p class="text-sm text-gray-400">
                                    {{-- {{ $transaksi->count() ?? '' }} Chekcout Log All --}}
                                    4
                                </p>
                            </div>
                            <div class="self-end hover:translate-x-2 transition transform">
                                <a href="#" class="text-sm text-gray-400 hover:text-gray-800">
                                    View All
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <table class="w-full mt-4" aria-label="Table">

                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    {{-- <th class="py-4" scope="">Mentor</th> --}}
                                    <th class="py-4" scope="">Course</th>
                                    <th class="py-4" scope="">Member</th>
                                    {{-- <th class="py-4" scope="">Price</th> --}}
                                    <th class="py-4" scope="">Status</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                {{-- @if ($transaksi == null)
                                    <tr>
                                        <td colspan="3" class="text-center">
                                            <p class="text-gray-500">
                                                No Data
                                            </p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($transaksi as $item)
                                        <tr>
                                            <td class="py-4">{{ $loop->iteration }}</td>
                                            <td class="py-4">{{ $item->course->name ?? '' }}</td>
                                            <td class="py-4">{{ $item->user->name ?? '' }}</td>
                                            <td class="px-1 py-5 text-sm">
                                                @if ($item->payment_status == 'pending')
                                                    <span class="text-red-400">
                                                        {{ $item->payment_status ?? '-' }}
                                                    </span>
                                                @elseif($item->payment_status == 'paid')
                                                    <span class="text-green-400">
                                                        {{ $item->payment_status ?? '-' }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="py-4 flex">
                                                <a href="{{ route('admin.transaction.show', $item->id) }}"
                                                    class="pr-2 py-2 mt-2 text-serv-yellow hover:text-gray-800">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <form action="{{ route('admin.transaction.destroy', $item->id) }}"
                                                    method="post">
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
                                @endif --}}


                            </tbody>
                        </table>

                    </div>
                </main>
            </div>
        </section>
    </main>

@endsection
