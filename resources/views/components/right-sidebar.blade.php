<div class="{{ request()->routeIs('akun') ? 'hidden' : 'block' }}">
    <div class="flex flex-col gap-3 w-80">
        {{-- card atas --}}
        <div class="rounded-lg p-3 bg-white flex flex-row gap-5 justify-start items-center">
            <div>
                <i class="fa-regular fa-circle-user text-6xl"></i>
            </div>
            <div>
                <p class="font-semibold text-lg">{{ Auth::user()->name }}</p>
                <p class="text-gray-400"><i class="fa-solid fa-envelope mr-2"></i>{{ Auth::user()->email }}
                </p>
                {{-- <p class="text-gray-400"><i class="fa-solid fa-phone mr-2"></i>+62859374857390</p> --}}
            </div>
        </div>

        {{-- card bawah --}}
        <div class="p-5 rounded-lg bg-blue-300">
            <p class="text-white text-lg font-semibold">Jangan Lewatkan</p>
            <p class="text-white ">Ada promo & penawaran menarik khusus untuk kamu, yuk segera cek sekarang
                juga.</p>
        </div>
    </div>
</div>
