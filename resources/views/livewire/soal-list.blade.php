<div>
    {{-- The whole world belongs to you. --}}
    @role('instruktur')
        <div class="flex flex-col p-3 gap-3">
            @forelse ($quizzes as $quiz)
                <a href="{{ route('buat-soal', $quiz->id) }}"
                    class="block transition delay-150 duration-300 ease-in-out hover:scale-105 " wire:navigate>
                    <div class="p-4 bg-white shadow-md rounded-lg">
                        <div class="flex flex-row justify-between items-center">
                            <div class="flex flex-row gap-3 items-center justify-start">
                                <div class="bg-gray-400 p-4 rounded-md">
                                    <i class="fa-solid fa-code text-white"></i>
                                </div>
                                <div>
                                    <h2 class="text-lg font-semibold">{{ $quiz->nama_soal }}</h2>
                                    <p class="text-gray-400 text-sm">Jumlah Soal: {{ $quiz->questions->count() }}</p>
                                </div>
                            </div>
                            <div>
                                <i class="fa-solid fa-chevron-right me-5 "></i>
                            </div>

                        </div>
                    </div>
                </a>

            @empty
                <p class="text-gray-500 text-center col-span-3">Soal belum ada</p>
            @endforelse
        </div>
        @elserole('siswa')
        @forelse ($quizzes as $quiz)
            <div class="p-4 bg-white shadow-md rounded-lg">
                <div class="flex flex-row justify-between items-center">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $quiz->nama_soal }}</h2>
                        <p class="text-gray-400 text-sm">Jumlah Soal: {{ $quiz->questions->count() }}</p>
                    </div>
                    <a href="{{ route('kerjakan-soal', $quiz->id) }}" class="text-blue-500 hover:text-blue-700"
                        wire:navigate>
                        Kerjakan
                    </a>
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-center col-span-3">Soal belum ada</p>
        @endforelse

    @endrole
    {{-- paginasi --}}
    @if ($quizzes->hasPages())
        <div class="flex flex-col items-center">
            <!-- Help text -->
            <span class="text-sm text-gray-700 dark:text-gray-400">
                Showing <span class="font-semibold ">{{ $quizzes->firstItem() }}</span> to
                <span class="font-semibold ">{{ $quizzes->lastItem() }}</span> of <span
                    class="font-semibold ">{{ $quizzes->total() }}</span> Entries
            </span>
            <!-- Buttons -->
            <!-- Buttons -->
            <div class="inline-flex mt-2">
                @if ($quizzes->onFirstPage())
                    <span
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-400 bg-gray-200 rounded-s cursor-not-allowed">
                        Prev
                    </span>
                @else
                    <button wire:click="previousPage"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 rounded-s hover:bg-gray-900">
                        Prev
                    </button>
                @endif

                @if ($quizzes->hasMorePages())
                    <button wire:click="nextPage"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900">
                        Next
                    </button>
                @else
                    <span
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-400 bg-gray-200 rounded-e cursor-not-allowed">
                        Next
                    </span>
                @endif
            </div>
        </div>
    @endif

</div>
