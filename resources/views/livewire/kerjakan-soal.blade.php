<div>
    <a href="{{ url()->previous() }}"
        class="focus:outline-none text-white inline-flex gap-2 justify-between items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
            class="fa-solid fa-delete-left text-white"></i>Kembali</a>
    <h2 class="text-xl font-bold mb-4">{{ $quiz->nama_soal }}</h2>
    <form wire:submit.prevent="save">
        @foreach ($quiz->questions as $index => $q)
            <div class="mb-4 p-4 border rounded-lg">
                <p class="font-medium">{{ $index + 1 }}.{{ $q->pertanyaan }}</p>
                @foreach ($q->options as $opt)
                    <label class="flex items-center gap-2 mt-2">
                        <input type="radio" wire:model="answers.{{ $q->id }}" value="{{ $opt->id }}"
                            class="text-blue-600">
                        {{ $opt->teks }}
                    </label>
                @endforeach
                {{-- tampilkan error kalau pertanyaan ini belum dijawab --}}
                @error('answers.' . $q->id)
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>
        @endforeach
        <button type="submit" class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Kirim Jawaban
        </button>
    </form>

    @if (session('success'))
        <div class="mt-3 p-2 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
</div>
