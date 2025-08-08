<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/998802c292.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

</head>

<body class="dark:bg-gray-900 bg-gray-100">
    {{-- navbar --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-xl shadow-white/5">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-5 p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span
                    class="text-gradient self-center text-3xl tracking-wide font-bold whitespace-nowrap dark:text-white">RTL</span>
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
                        <a href="{{ route('beranda') }}"
                            class="{{ request()->routeIs('beranda') ? 'bg-blue-500 px-4 py-1 rounded-full text-white' : 'text-gray-300' }}"
                            wire:navigate>Beranda</a>
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
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Akun</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="flex flex-row justify-between m-5">
        {{-- left sidebar --}}
        <div>
            <div class="bg-white p-3 rounded-lg shadow-lg flex flex-col h-96 w-56 overflow-y-auto space-y-4">
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-clipboard p-2 rounded-full text-white bg-blue-500"></i>
                    Simulasi
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-clipboard-list p-2 rounded-full text-white bg-blue-500"></i>
                    Latsol
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-book-open-reader p-2 rounded-full text-white bg-blue-500"></i>
                    Materi
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-tv p-2 rounded-full text-white bg-blue-500"></i>
                    Liveclass
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-calendar p-2 rounded-full text-white bg-blue-300"></i>
                    Kalender
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-users p-2 rounded-full text-white bg-blue-300"></i>
                    Join Grup Gratis Belajar...
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-percent p-2 rounded-full text-white bg-blue-300"></i>
                    Konsultan Promo
                </a>
                <a href="" class="hover:bg-blue-400 p-2 flex flex-row gap-2 items-center rounded-full">
                    <i class="fa-solid fa-circle-xmark p-2 rounded-full text-white bg-blue-300"></i>
                    Konsultan Masalah
                </a>


            </div>

            <div class="bg-white p-3 rounded-lg mt-5">
                <a href="" class="hover:bg-red-400 p-2 flex flex-row gap-2 rounded-full">
                    <i class="fa-solid fa-right-from-bracket p-2 rounded-full text-white bg-red-500"></i>
                    Keluar
                </a>
            </div>

        </div>
        {{-- konten utama --}}
        <div class="mx-5 flex-1">
            
            {{ $slot }}

        </div>

        {{-- right sidebar --}}
        <div>
            <div class="flex flex-col gap-3 w-80">
                {{-- card atas --}}
                <div class="rounded-lg p-3 bg-white flex flex-row gap-5 justify-center items-center">
                    <div>
                        <i class="fa-regular fa-circle-user text-6xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-lg">au izaldi fachril rahmadani</p>
                        <p class="text-gray-400"><i class="fa-solid fa-envelope mr-2"></i>dani@mail.com</p>
                        <p class="text-gray-400"><i class="fa-solid fa-phone mr-2"></i>+62859374857390</p>
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


    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>
