<div>
    {{-- button show quiz --}}

    @if (\App\Models\Questions::where('quiz_id', $quizId)->exists())
        <div class="flex justify-end my-3">
            <a href="{{ route('detail-soal', $quizId) }}" wire:navigate
                class="text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none dark:focus:ring-blue-800">Tampilkan
                Soal</a>
        </div>
    @endif


    <h2 class="mb-4 text-xl font-bold text-gray-900">Buat Soal: {{ $quiz->nama_soal }} </h2>

    {{-- alert radio button --}}
    @error('benar')
        <div class="mb-4 p-3 text-sm text-red-700 bg-red-100 rounded-lg">
            Harus pilih jawaban benar
        </div>
    @enderror
    @if (session('success'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
            class="mb-4 p-3 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="block mb-2 text-sm font-medium">Pertanyaan</label>
            <input type="text" wire:model="pertanyaan" class="w-full p-2 border rounded-lg"
                placeholder="Masukkan pertanyaan...">
            @error('pertanyaan')
                <span class="text-red-500 text-sm">Kolom pertanyaan wajib diisi</span>
            @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
            @foreach ($opsi as $i => $value)
                <div>
                    <label class="block mb-2 text-sm font-medium">Opsi {{ $i + 1 }}</label>
                    <div class="flex items-center gap-2">
                        <input type="text" wire:model="opsi.{{ $i }}" class="w-full p-2 border rounded-lg"
                            placeholder="Masukkan opsi...">

                        <!-- radio penanda benar -->
                        <input type="radio" wire:model="benar" value="{{ $i }}"
                            class="w-5 h-5 text-blue-600">
                    </div>
                    @error("opsi.$i")
                        <span class="text-red-500 text-sm">Kolom opsi jawaban wajib diisi</span>
                    @enderror
                </div>
            @endforeach
        </div>


        <button type="submit" class="mt-4 px-5 py-2.5 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Tambah Soal
        </button>
    </form>
</div>
