<div class="p-4 bg-white shadow rounded-lg">
    <h2 class="text-lg font-bold mb-3">Detail Soal: {{ $quiz->nama_soal }}</h2>

    @foreach ($quiz->questions as $index => $question)
        <div class="mb-4">
            <p class="font-medium">{{ $index+1 }}. {{ $question->pertanyaan }}</p>
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
