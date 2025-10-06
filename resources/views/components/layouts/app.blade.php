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

<body class="dark:bg-gray-900 bg-gray-100 overflow-auto">
    {{-- navbar --}}
    @include('components.navbar')
    {{-- <div class="flex p-20 fixed top-14 bg-white w-[52%] rounded-lg ml-64 mr-96 z-10">

    </div> --}}
    <div class="flex  m-5">
        {{-- left sidebar --}}

        <livewire:left-sidebar />

        {{-- konten utama --}}

        <main
            class="ml-0 mr-0 {{ request()->routeIs('akun') ? 'lg:ml-[15rem] lg:mr-0' : 'lg:ml-[15rem] lg:mr-[21rem]' }} flex-1 min-h-screen pb-20 p-5 mb-10 bg-gray-200 rounded-lg">

            {{-- flash message --}}
            @if (session('welcome'))
                <div id="alert-3" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                    role="alert"
                    class="fixed z-50 flex items-center gap-3 px-4 py-3 rounded-lg shadow-md bg-green-50 text-green-800 dark:bg-gray-800 dark:text-green-400 top-4 left-4 right-4 sm:left-1/2 sm:-translate-x-1/2 sm:right-auto sm:w-auto sm:max-w-md lg:max-w-lg transition-all duration-300">

                    <!-- Icon -->
                    <svg class="w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20" aria-hidden="true">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3
               1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0
               1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>

                    <!-- Text -->
                    <div class="text-sm text-center">
                        <strong class="font-bold">{{ session('welcome') }}</strong>
                        <div class="text-xs">
                            Anda login sebagai <b>{{ Auth::user()->getRoleNames()->first() }}</b>
                        </div>
                    </div>

                    <!-- Close button -->
                    <button type="button" @click="show = false" aria-label="Close"
                        class="ml-auto flex items-center justify-center w-8 h-8 rounded-lg
                   bg-green-50 text-green-500 hover:bg-green-200 focus:ring-2 focus:ring-green-400
                   dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700">
                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"
                            aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            {{ $slot }}
        </main>

        {{-- right sidebar --}}

        <livewire:right-sidebar />


    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</body>

</html>
