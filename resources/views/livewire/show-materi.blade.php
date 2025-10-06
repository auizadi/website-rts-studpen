<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <a href="{{ route('homepage-student') }}"
        class="focus:outline-none text-white inline-flex gap-2 justify-between items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
        wire:navigate><i class="fa-solid fa-delete-left text-white"></i>Kembali</a>
    <h1 class="font-bold text-2xl my-3">Materi</h1>
    <div class="space-y-6">
        @foreach ($kategoriList as $kategori)
            <h1 class="my-3 font-bold text-xl capitalize">{{ $kategori }}</h1>
            <div class="grid grid-cols-3 justify-items-stretch gap-4 bg-white rounded-lg p-5">
                @foreach ($materis->where('kategori', $kategori) as $materi)
                    <div class="p-2">
                        <div class="flex flex-col gap-1 text-center font-bold">
                            <a href="{{ route('materi-view', $materi->id) }}" target="_blank">
                                {{-- Ganti icon sesuai kategori --}}
                                @if ($kategori == 'pemrograman')
                                    <i class="fa-solid fa-laptop-code text-xl lg:text-3xl"></i>
                                @elseif($kategori == 'desain')
                                    <i class="fa-solid fa-pen-nib text-xl lg:text-3xl"></i>
                                @elseif($kategori == 'database')
                                    <i class="fa-solid fa-database text-xl lg:text-3xl"></i>
                                @else
                                    <i class="fa-solid fa-book text-xl lg:text-3xl"></i>
                                @endif

                                <p class="text-xs lg:text-lg font-semibold">{{ $materi->judul }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

</div>
