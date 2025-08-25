<div>
    {{-- Do your work, then step back. --}}
    {{-- tambah soal --}}
    @role('instruktur')
        <div class="flex justify-end mb-5">
            <button type="button" wire:click="$dispatch('openModalSoal')"
                class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
                <i class="fa-solid fa-plus me-2"></i>
                Tambah Soal
            </button>
            <livewire:modal-soal />
        </div>

        <form class="flex items-center justify-start max-w-sm ms-3 mb-5">
            <label for="simple-search" class="sr-only">Cari</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass w-4 h-4 text-gray-500 dark:text-gray-400"></i>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gra-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari nama soal..." required />
            </div>
            <button type="submit"
                class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Cari</span>
            </button>
        </form>

        <livewire:soal-list />
        @elserole('siswa')
        <div>
            <h1 class="text-center font-bold text-3xl my-5">Daftar Soal</h1>
            <livewire:soal-list />

        </div>
    @endrole

</div>
