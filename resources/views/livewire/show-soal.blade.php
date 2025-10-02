<div>
    @role('instruktur')
        <div class="p-4 bg-white shadow rounded-lg">
            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                    class="mb-4 p-3 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-lg font-bold mb-3">Detail Soal: {{ $quiz->nama_soal }}</h2>
                @if ($quiz->questions->count() > 0 && !$quiz->is_published)
                    <button type="button" wire:click='publish'
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Unggah
                        Soal
                    </button>
                @endif

            </div>
            @if ($quiz->questions->count() === 0)
                <p class="text-center italic text-gray-500 font-thin">Tidak ada soal.</p>
            @else
                @php
                    $questions = $quiz->questions->slice(($page - 1) * $perPage, $perPage)->values();
                @endphp

                @foreach ($questions as $question)
                    <div class="p-4 border rounded-lg mb-3">
                        @if ($editMode && $editQuestionId === $question->id)
                            <!-- Form Edit -->
                            <form wire:submit.prevent="update">
                                <input type="text" wire:model="pertanyaan" class="w-full border p-2 rounded mb-3">

                                @foreach ($opsi as $i => $value)
                                    <div class="flex items-center gap-2 mb-2">
                                        <input type="text" wire:model="opsi.{{ $i }}"
                                            class="border p-2 rounded w-full">
                                        <input type="radio" wire:model="benar" value="{{ $i }}">
                                    </div>
                                @endforeach

                                <div class="flex gap-2 mt-3">
                                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
                                    <button type="button" wire:click="cancelEdit"
                                        class="bg-gray-400 text-white px-4 py-2 rounded">Batal</button>
                                </div>
                            </form>
                        @else
                            <!-- Tampilan normal -->
                            <div class="flex justify-between items-center">
                                <p class="font-semibold">{{ $loop->iteration + ($page - 1) * $perPage }}.
                                    {{ $question->pertanyaan }}</p>
                                <div class="flex gap-2">
                                    <button wire:click="edit({{ $question->id }})"
                                        class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                                    <button wire:click="delete({{ $question->id }})"
                                        onclick="return confirm('Yakin ingin menghapus soal ini?')"
                                        class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                </div>
                            </div>
                            <ul class="ml-4 list-disc">
                                @foreach ($question->options as $opt)
                                    <li class="{{ $opt->is_correct ? 'text-green-600 font-bold' : '' }}">
                                        {{ $opt->teks }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach

                @if ($totalPages > 1)
                    <div class="flex justify-center mt-4 space-x-2">
                        <!-- Tombol Prev -->
                        <button wire:click="prevPage"
                            class="px-4 py-2 rounded-l
                        {{ $page == 1 ? 'bg-gray-300 text-gray-500 cursor-not-allowed' : 'bg-blue-600 text-white hover:bg-blue-700' }}"
                            {{ $page == 1 ? 'disabled' : '' }}>
                            Prev
                        </button>

                        <!-- Tombol Next -->
                        <button wire:click="nextPage"
                            class="px-4 py-2 rounded-r
                        {{ $page * $perPage >= $quiz->questions->count() ? 'bg-gray-300 text-gray-500 cursor-not-allowed' : 'bg-blue-600 text-white hover:bg-blue-700' }}"
                            {{ $page * $perPage >= $quiz->questions->count() ? 'disabled' : '' }}>
                            Next
                        </button>
                    </div>
                    <p class="text-center text-sm text-gray-500 mt-2">
                        Halaman {{ $page }} dari {{ $totalPages }}
                    </p>
                @endif
            @endif
        </div>
        @elserole('siswa')
        <h2 class="text-lg font-bold mb-3">Hasil Jawaban: {{ $quiz->nama_soal }}</h2>

        <div class="mb-5 p-3 bg-gray-100 rounded">
            <p class="text-sm font-semibold">Nilai Kamu:
                <span class="text-blue-600">{{ $score }}/100</span>
            </p>
        </div>

        @foreach ($quiz->questions as $index => $question)
            <div class="mb-4">
                <p class="font-medium">{{ $index + 1 }}. {{ $question->pertanyaan }}</p>
                <ul class="list-disc pl-5">
                    @foreach ($question->options as $opt)
                        <li @class([
                            // jika jawaban siswa ini benar
                            'text-green-600 font-semibold' =>
                                isset($answers[$question->id]) &&
                                $answers[$question->id] == $opt->id &&
                                $opt->is_correct,
                        
                            // jika jawaban siswa ini salah
                            'text-red-600 font-semibold' =>
                                isset($answers[$question->id]) &&
                                $answers[$question->id] == $opt->id &&
                                !$opt->is_correct,
                        
                            // tunjukkan jawaban benar (meski siswa tidak pilih)
                            'text-green-500 underline' =>
                                (!isset($answers[$question->id]) ||
                                    $answers[$question->id] != $opt->id) &&
                                $opt->is_correct,
                        
                            // default abu-abu
                            'text-gray-700' =>
                                !isset($answers[$question->id]) || $answers[$question->id] != $opt->id,
                        ])>
                            {{ $opt->teks }}

                            {{-- Label jawaban siswa --}}
                            @if (isset($answers[$question->id]) && $answers[$question->id] == $opt->id)
                                <span class="ml-2 text-xs">(Jawabanmu)</span>
                            @endif

                            {{-- Label jawaban benar jika siswa salah --}}
                            @if ($opt->is_correct && isset($answers[$question->id]) && $answers[$question->id] != $opt->id)
                                <span class="ml-2 text-xs text-green-600">(Jawaban Benar)</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endrole
</div>
