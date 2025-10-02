<div>
    {{-- Success is as dangerous as failure. --}}
    {{-- carousel --}}
    <div id="default-carousel" class="relative w-full" data-carousel="slide" x-data x-init="initFlowbite()">
        <!-- Carousel wrapper -->
        <div class="relative h-56 md:h-96 overflow-hidden rounded-lg">
            <!-- Item 1 -->
            <div class="duration-700 ease-in-out" data-carousel-item="active">
                <img src="{{ asset('asset-contoh-1.png') }}" class="w-full h-full object-cover" alt="Slide 1">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset-contoh.png') }}" class="w-full h-full object-cover" alt="Slide 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset-contoh-1.png') }}" class="w-full h-full object-cover" alt="Slide 3">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset-contoh.png') }}" class="w-full h-full object-cover" alt="Slide 4">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('asset-contoh-1.png') }}" class="w-full h-full object-cover" alt="Slide 5">
            </div>
        </div>

        <!-- Slider indicators -->
        <div class="absolute bottom-5 w-full flex justify-center z-30">
            <div class="flex gap-3">
                @for ($i = 0; $i < 5; $i++)
                    <button type="button"
                        class="w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                        aria-current="{{ $i == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"
                        data-carousel-slide-to="{{ $i }}">
                    </button>
                @endfor
            </div>
        </div>


        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 focus:ring-4 focus:ring-white">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 group-hover:bg-black/50 focus:ring-4 focus:ring-white">
                <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </span>
        </button>
    </div>

    <div class="rounded-md bg-gray-100 p-5 my-5">
        <div class="flex justify-between items-center mb-3 ">
            <div class="flex items-center gap-2">
                <div class="flex items-center justify-center rounded-full w-8 h-8 bg-blue-500 text-white">
                    <i class="fa-solid fa-clipboard-list "></i>
                </div>
                <span class="font-semibold text-xl">Latsol</span>
            </div>
            <div>
                <a href="#" class="text-blue-500 font-semibold hover:text-blue-600">Lihat Semua</a>
            </div>
        </div>
        <p class="italic text-gray-500 text-sm font-thin">Latihan Soal</p>

    </div>

    <div class="rounded-md bg-gray-100 p-5 my-5">
        <div class="flex justify-between items-center mb-3 ">
            <div class="flex items-center gap-2">
                <div class="flex items-center justify-center rounded-full w-8 h-8 bg-blue-500 text-white">
                    <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <span class="font-semibold text-xl">Materi</span>
            </div>
            <div>
                <a href="#" class="text-blue-500 font-semibold hover:text-blue-600">Lihat Semua</a>
            </div>
        </div>
        <p class="italic text-gray-500 text-sm font-thin">Latihan Belajar</p>
    </div>

    <div class="rounded-md bg-gray-100 p-5 my-5">
        <div class="flex justify-between items-center mb-3 ">
            <div class="flex items-center gap-2">
                <div class="flex items-center justify-center rounded-full w-8 h-8 bg-blue-500 text-white">
                    <i class="fa-solid fa-tv "></i>
                </div>
                <span class="font-semibold  text-xl">Liveclass</span>
            </div>
            <div>
                <a href="#" class="text-blue-500 font-semibold hover:text-blue-600">Lihat Semua</a>
            </div>
        </div>
        <p class="italic text-sm text-gray-500 font-thin">Liveclass</p>

    </div>




</div>
