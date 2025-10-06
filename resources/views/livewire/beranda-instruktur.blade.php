<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex flex-row justify-center gap-3">
        <div class="bg-teal-500 p-5 rounded-lg text-white text-center w-full">
            <h1 class="my-3 font-bold">{{ \App\Models\User::role('siswa')->count() }}</h1>
            <p>Jumlah Siswa</p>
        </div>
        <div class="bg-cyan-500 p-5 rounded-lg text-white text-center w-full">
            <h1 class="my-3 font-bold">{{ \App\Models\Quizzes::where('is_published', true)->count() }}</h1>
            <p>Jumlah Quiz</p>
        </div>
        <div class="bg-blue-500 p-5 rounded-lg text-white text-center w-full">
            <h1 class="my-3 font-bold">{{ \App\Models\Questions::count() }}</h1>
            <p>Jumlah Pertanyaan</p>
        </div>
    </div>

    <livewire:menu-mobile />

</div>
