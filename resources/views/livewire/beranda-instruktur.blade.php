<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="bg-teal-500 p-5 rounded-lg">
        <h1 class="my-3 font-bold">{{ \App\Models\User::role('siswa')->count() }}</h1>
        <p>Siswa</p>
    </div>
</div>
