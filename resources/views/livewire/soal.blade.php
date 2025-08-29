<div>
    {{-- Do your work, then step back. --}}
    {{-- tambah soal --}}
    @role('instruktur')
        <div class="flex justify-end mb-5">
            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                    class="mb-4 p-3 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <button type="button" wire:click="$dispatch('openModalSoal')"
                class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
                <i class="fa-solid fa-plus me-2"></i>
                Tambah Soal
            </button>
            <livewire:modal-soal />
        </div>

        <livewire:soal-list />
        @elserole('siswa')
        <div>
            <h1 class="text-center font-bold text-3xl my-5">Daftar Soal</h1>
            <livewire:soal-list />

        </div>
    @endrole

</div>
