<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="card group h-full">
        <div
            class="h-full p-6 bg-white dark:bg-gray-800 border border-indigo-500 dark:border-gray-700 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 hover:border-indigo-300 dark:hover:border-indigo-500 flex flex-col">
            <i class="fa-solid {{ $image }} text-5xl mb-5 text-gradient"></i>
            <h3 class="text-xl md:text-2xl font-bold mb-3 text-gray-900 dark:text-white">
                {{ $title }}
            </h3>
            <p class="text-gray-600 dark:text-gray-300 mb-6 flex-grow">
                {{ $description }}
            </p>
            <div class="flex md:flex-row flex-col items-center gap-3">
                <button
                    class="w-full inline-flex justify-between items-center px-5 py-3 gradient text-white font-semibold rounded-lg hover:shadow-lg transition-all duration-300 group-hover:translate-x-1"
                    wire:click='toggleModal'>
                    Detail
                    <i class="fa-solid fa-info ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
                <a href="{{ $loginRoute }}"
                    class="w-full inline-flex justify-between items-center px-5 py-3 gradient text-white font-semibold rounded-lg hover:shadow-lg transition-all duration-300 group-hover:translate-x-1"
                    wire:navigate>
                    Daftar
                    <i
                        class="fa-solid fa-arrow-right ml-2 transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>

        </div>
    </div>

    {{-- modal --}}
    @if ($showModal)
        <!-- Overlay background -->
        <div class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40"></div>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 z-50 flex justify-center items-center">
            <div
                class="relative w-full max-w-2xl mx-auto bg-white rounded-lg shadow-lg dark:bg-gray-700
                    max-h-[70vh] overflow-y-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">

                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between p-4 sticky top-0 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200 bg-white dark:bg-gray-700">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Detail {{ $title }}
                        </h3>
                        <button type="button" wire:click="toggleModal"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4 text-justify">
                        {{-- Deskripsi --}}
                        <h4 class="font-semibold text-lg text-gray-500 dark:text-gray-400">Deskripsi: </h4>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $detailContent['deskripsi'] }}
                        </p>

                        {{-- skills --}}
                        <h4 class="font-semibold text-lg text-gray-500 dark:text-gray-400 mt-4">Ketrampilan yang akan
                            dikuasai: </h4>
                        <ul class="list-disc pl-5 text-base space-y-1 leading-relaxed text-gray-500 dark:text-gray-400">
                            @foreach ($detailContent['skills'] as $skill)
                                <li>{{ $skill }}</li>
                            @endforeach
                        </ul>

                        {{-- projects --}}
                        <h4 class="font-semibold text-lg text-gray-500 dark:text-gray-400 mt-4">Proyek yang mungkin kamu
                            kerjakan: </h4>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            {{ $detailContent['projects'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
