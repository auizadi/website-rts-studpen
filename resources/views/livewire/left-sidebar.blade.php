<div>
    {{-- In work, do what you enjoy. --}}
    <div x-data x-init="initFlowbite()" class="fixed left-5 h-screen z-20">
        <div class="bg-white p-3 hidden rounded-lg shadow-lg md:flex flex-col h-96 w-56 overflow-y-auto space-y-4">
            @role('siswa')
                {{-- Dashboard --}}
                <a href="{{ route('homepage-student') }}"
                    class="{{ request()->routeIs('homepage-student') ? 'bg-blue-400 text-white' : 'hover:bg-blue-400 hover:text-white' }}
        p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="simulasi-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-clipboard flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-500"></i>
                    Simulasi
                </a>
                <div id="simulasi-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Simulasi
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                {{-- Latihan Soal --}}
                <a href="{{ route('soal') }}"
                    class="{{ request()->routeIs('soal') ? 'bg-blue-400 text-white' : 'hover:bg-blue-400 hover:text-white' }}
        p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="latsol-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-clipboard-list flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-500"></i>
                    Latsol
                </a>
                <div id="latsol-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Latsol
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                {{-- Materi --}}
                <a href="#" class="hover:bg-blue-400 hover:text-white p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="materi-bottom" data-tooltip-placement="bottom">
                    <i
                        class="fa-solid fa-book-open-reader flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-500"></i>
                    Materi
                </a>
                <div id="materi-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Materi
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                {{-- Liveclass --}}
                <a href="#" class="hover:bg-blue-400 hover:text-white p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="liveclass-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-tv flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-500"></i>
                    Liveclass
                </a>
                <div id="liveclass-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Liveclass
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                {{-- Kalender --}}
                <a href="#" class="hover:bg-blue-400 hover:text-white p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="kalender-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-calendar flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-300"></i>
                    Kalender
                </a>
                <div id="kalender-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Kalender
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                {{-- Join Grup --}}
                <button type="button" data-modal-target="modal-join" data-modal-toggle="modal-join"
                    class="hover:bg-blue-400 hover:text-white p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="join-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-users flex items-center justify-center h-10 w-10 rounded-full text-white bg-blue-300"></i>
                    Join Grup Gratis Belajar...
                </button>
                <div id="join-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Join Grup Gratis Belajar CPNS 2025
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                {{-- Konsultan Promo --}}
                <button type="button" data-modal-target="modal-promo" data-modal-toggle="modal-promo"
                    class="hover:bg-blue-400 hover:text-white p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="promo-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-percent flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-300"></i>
                    Konsultan Promo
                </button>
                <div id="promo-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Konsultan Promo
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                {{-- Konsultan Masalah --}}
                <button type="button" data-modal-target="modal-masalah" data-modal-toggle="modal-masalah"
                    class="hover:bg-blue-400 hover:text-white p-2 flex items-center gap-2 rounded-full"
                    data-tooltip-target="masalah-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-circle-xmark flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-300"></i>
                    Konsultan Masalah
                </button>
                <div id="masalah-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Konsultan Masalah
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                @elserole('instruktur')
                {{-- simulasi --}}
                <a href="{{ route('beranda-instruktur') }}"
                    class="{{ request()->routeIs('beranda-instruktur') ? 'bg-blue-400 p-2 flex text-white flex-row gap-2 items-center rounded-full' : 'hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full' }}"
                    wire:navigate data-tooltip-target="dashboard-bottom" data-tooltip-placement="bottom">
                    <i
                        class="fa-solid fa-clipboard flex items-center justify-center h-8 w-8 rounded-full text-white bg-blue-500"></i>
                    Dashboard
                </a>
                <div id="dashboard-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Dashboard
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                {{-- tambah soal --}}
                <a href="{{ route('soal') }}"
                    class="{{ request()->routeIs('soal') ? ' bg-blue-400 p-2 flex text-white flex-row gap-2 items-center rounded-full' : 'hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full' }} "
                    data-tooltip-target="soal-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i class="fa-solid fa-clipboard-list p-2 rounded-full h-8 w-8 text-center text-white bg-blue-500"></i>
                    Tambah Soal
                </a>
                <div id="soal-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Tambah Soal
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                {{-- tambah materi --}}
                <a href="{{route('tambah-materi')}}" wire:navigate
                    class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full" data-tooltip-target="materi-bottom" data-tooltip-placement="bottom" wire:navigate>
                    <i
                        class="fa-solid fa-book-open-reader p-2 rounded-full h-8 w-8 text-center text-white bg-blue-500"></i>
                    Tambah Materi
                </a>
                <div id="materi-bottom" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                    Tambah Materi
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            @endrole
        </div>
        {{-- modal logout --}}
        <div class="bg-white p-3 rounded-lg mt-5 md:block hidden">
            <!-- Tombol Trigger Modal -->
            <button type="button" data-modal-target="logout-modal" data-modal-toggle="logout-modal"
                class="bg-red-500 hover:bg-red-600 p-2 flex text-white flex-row gap-2 rounded-lg w-full items-center justify-center">
                <i class="fa-solid fa-right-from-bracket p-2 rounded-full text-white"></i>
                <span class="text-white font-semibold">Keluar</span>
            </button>
        </div>


    </div>
    <!-- Modal Konfirmasi Logout -->
    <div id="logout-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[9999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Tombol Close -->
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="logout-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Tutup</span>
                </button>

                <div class="p-4 md:p-5 text-center">
                    <!-- Icon Warning -->
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <!-- Pesan Konfirmasi -->
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin
                        ingin keluar?</h3>

                    <!-- Form Logout -->
                    <div class="flex flex-row justify-center items-center gap-5">
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <button type="submit"
                                class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya, Keluar
                            </button>
                        </form>

                        <button data-modal-hide="logout-modal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-[9999] focus:ring-4 focus:ring-gray-100">
                            Batal
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- modal join grup --}}
    <div id="modal-join" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[9999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Join Grup Gratis Belajar CPNS 2025
                    </h3>
                    <button type="button" data-modal-hide="modal-join"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img src="{{ asset('asset-2.webp') }}" alt="join-grup"
                        class="w-full h-full object-cover rounded-md">
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modal-join" type="button"
                        class="text-white flex items-center gap-2 bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <i class="fa-brands fa-whatsapp"></i> WhatsApp
                    </button>
                    <button data-modal-hide="modal-join" type="button"
                        class="flex items-center gap-2 py-2.5 px-5 ms-3 text-sm font-medium text-white focus:outline-none bg-sky-500 rounded-lg hover:bg-sky-600 focus:ring-4 focus:ring-sky-300">
                        <i class="fa-brands fa-telegram"></i> Telegram
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal promo --}}
    <div id="modal-promo" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[9999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Konsultan Promo
                    </h3>
                    <button type="button" data-modal-hide="modal-promo"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img src="{{ asset('asset-3.png') }}" alt="konsultan-promo"
                        class="w-full h-full object-cover rounded-md">
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modal-promo" type="button"
                        class="text-white flex-1  bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-skbg-sky-300 font-medium rounded-lg text-sm py-2.5 text-center">
                        Chat Konsultan
                    </button>

                </div>
            </div>
        </div>
    </div>

    {{-- modal masalah --}}
    <div id="modal-masalah" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[9999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Konsultan Promo
                    </h3>
                    <button type="button" data-modal-hide="modal-masalah"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img src="{{ asset('asset-4.png') }}" alt="konsultan-masalah"
                        class="w-full h-full object-cover rounded-md">
                </div>
                <!-- Modal footer -->
                <div
                    class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="modal-masalah" type="button"
                        class="text-white flex-1  bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-skbg-sky-300 font-medium rounded-lg text-sm py-2.5 text-center">
                        Chat Konsultan
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
