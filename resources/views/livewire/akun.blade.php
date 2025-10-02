<div>
    {{-- Success is as dangerous as failure. --}}
    {{-- card --}}
    <div class="rounded-lg mb-5 p-3 bg-white flex shadow-md shadow-gray-500 flex-row gap-5 justify-start items-center">
        <div>
            <i class="fa-regular fa-circle-user text-6xl"></i>
        </div>
        <div>
            <p class="font-semibold text-lg">{{ Auth::user()->name }}</p>
            <p class="text-gray-400"><i class="fa-solid fa-envelope mr-2"></i>{{ Auth::user()->email }}</p>
            {{-- <p class="text-gray-400"><i class="fa-solid fa-phone mr-2"></i>+62859374857390</p> --}}
        </div>
    </div>

    {{-- button --}}
    <a href=""
        class="text-white font-semibold p-3 mb-5 bg-blue-500 hover:bg-blue-600 rounded-full flex justify-center items-center"><span
            class=" text-center">Ubah Profil</span> </a>
    <hr>

    {{-- Detail info personal --}}
    <div class="bg-blue-500 text-white font-semibold px-4 py-1 rounded-full w-fit translate-y-5 translate-x-3">
        Detail Info Personal
    </div>
    <div class="bg-white p-3 rounded-lg shadow-md shadow-gray-500">

        <div class="my-5 flex justify-between">
            <div class="font-medium text-gray-600">Nama</div>
            <div>{{ Auth::user()->name }}</div>
        </div>
        <div class="flex justify-between">
            <div class="font-medium text-gray-600">Email</div>
            <div>{{ Auth::user()->email }}</div>
        </div>
    </div>
</div>