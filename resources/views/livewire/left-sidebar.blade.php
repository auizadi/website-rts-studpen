<div>
    {{-- In work, do what you enjoy. --}}
    <div x-data x-init="initFlowbite()" class="">
        <div class="bg-white p-3 rounded-lg shadow-lg flex flex-col h-96 w-56 overflow-y-auto space-y-4">
            <a href=""
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-clipboard p-2 rounded-full text-white bg-blue-500"></i>
                Simulasi
            </a>
            @role('instruktur')
                <a href="{{ route('soal') }}"
                    class="{{ request()->routeIs('soal') ? ' bg-blue-400 p-2 flex text-white flex-row gap-2 items-center rounded-full' : 'hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full' }} "
                    wire:navigate>
                    <i class="fa-solid fa-clipboard-list p-2 rounded-full text-white bg-blue-500"></i>
                    Tambah Soal
                </a>
                @elserole('siswa')
                <a href="{{ route('soal') }}"
                    class="{{ request()->routeIs('soal') ? ' bg-blue-400 p-2 flex text-white flex-row gap-2 items-center rounded-full' : 'hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full' }} "
                    wire:navigate>
                    <i class="fa-solid fa-clipboard-list p-2 rounded-full text-white bg-blue-500"></i>
                    Latsol
                </a>
            @endrole

            <a href=""
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-book-open-reader p-2 rounded-full text-white bg-blue-500"></i>
                Materi
            </a>
            <a href=""
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-tv p-2 rounded-full text-white bg-blue-500"></i>
                Liveclass
            </a>
            <a href=""
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-calendar p-2 rounded-full text-white bg-blue-300"></i>
                Kalender
            </a>
            {{-- button join --}}
            <a href="" data-tooltip-target="tooltip-default"
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-users p-2 rounded-full text-white bg-blue-300"></i>
                Join Grup Gratis Belajar...
            </a>
            <div id="tooltip-default" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                Join Grup Gratis Belajar CPNS 2025
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <a href=""
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-percent p-2 rounded-full text-white bg-blue-300"></i>
                Konsultan Promo
            </a>
            <a href=""
                class="hover:bg-blue-400 p-2 flex hover:text-white flex-row gap-2 items-center rounded-full">
                <i class="fa-solid fa-circle-xmark p-2 rounded-full text-white bg-blue-300"></i>
                Konsultan Masalah
            </a>

        </div>
        {{-- modal logout --}}
        <div class="bg-white p-3 rounded-lg mt-5">
            <!-- Tombol Trigger Modal -->
            <button type="button" data-modal-target="logout-modal" data-modal-toggle="logout-modal"
                class="bg-red-500 hover:bg-red-600 p-2 flex text-white flex-row gap-2 rounded-lg w-full items-center justify-center">
                <i class="fa-solid fa-right-from-bracket p-2 rounded-full text-white"></i>
                <span class="text-white font-semibold">Keluar</span>
            </button>
        </div>

        <!-- Modal Konfirmasi Logout -->
        <div id="logout-modal" tabindex="-1"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
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
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                Batal
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
