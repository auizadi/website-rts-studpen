<nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-xl shadow-white/5">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-5 p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span
                class="dark:text-white text-transparent bg-clip-text bg-gradient-to-r from-[#ff4800] via-[#e0007c] to-[#3b82f6] self-center text-3xl tracking-wide font-bold whitespace-nowrap ">RTS</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    @role('siswa')
                        <a href="{{ route('homepage-student') }}"
                            class="{{ request()->routeIs('homepage-student') ? 'bg-blue-500 px-4 py-1 rounded-full text-white' : 'text-black' }}"
                            wire:navigate>Beranda</a>
                    @endrole
                    @role('instruktur')
                        <a href="{{ route('beranda-instruktur') }}"
                            class="{{ request()->routeIs('beranda-instruktur') ? 'bg-blue-500 px-4 py-1 rounded-full text-white' : 'text-gray-300' }}"
                            wire:navigate>Beranda</a>
                    @endrole

                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Aktivitas</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pembelian</a>
                </li>
                <li>
                    <a href="{{ route('akun') }}"
                        class="{{ request()->routeIs('akun') ? 'bg-blue-500 px-4 py-1 rounded-full text-white' : ' hover:text-blue-500 text-white' }}"
                        wire:navigate>Akun</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
