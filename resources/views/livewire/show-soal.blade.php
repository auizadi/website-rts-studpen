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
                @if (!$quiz->is_published)
                    <button type="button" wire:click='publish'
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Unggah
                        Soal
                    </button>
                @endif

            </div>

            @foreach ($quiz->questions as $index => $question)
                <div class="mb-4">
                    <p class="font-medium">{{ $index + 1 }}. {{ $question->pertanyaan }}</p>
                    <ul class="list-disc pl-5">
                        @foreach ($question->options as $opt)
                            <li @class([
                                'text-green-600 font-semibold' => $opt->is_correct,
                                'text-gray-700' => !$opt->is_correct,
                            ])>
                                {{ $opt->teks }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
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
