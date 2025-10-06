<div>
    {{-- Do your work, then step back. --}}
    {{-- tambah soal --}}
    @role('instruktur')
        <div class="flex flex-row justify-between mb-5">
            <a href="{{ route('beranda-instruktur') }}"
                class="focus:outline-none text-white flex flex-row gap-2 justify-between items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                wire:navigate><i class="fa-solid fa-delete-left text-white"></i>Kembali</a>

            <button type="button" wire:click="$dispatch('openModalSoal')"
                class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
                <i class="fa-solid fa-plus me-2"></i>
                Tambah Soal
            </button>
        </div>
        <livewire:modal-soal />

        <livewire:soal-list />
        @elserole('siswa')
        <div>
            <a href="{{ route('homepage-student') }}"
                class="focus:outline-none text-white inline-flex gap-2 justify-between items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                wire:navigate><i class="fa-solid fa-delete-left text-white"></i>Kembali</a>
            <h1 class="text-center font-bold text-3xl my-5">Daftar Soal</h1>
            <livewire:soal-list />
        </div>
    @endrole

</div>
