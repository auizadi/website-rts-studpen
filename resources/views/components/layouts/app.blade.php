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


    <div class="flex flex-row justify-between m-5">
        {{-- left sidebar --}}
        <livewire:left-sidebar>
        {{-- konten utama --}}
        <div class="mx-5 flex-1 min-h-screen p-5 bg-gray-100 rounded-lg overflow-y-auto">
            {{-- flash message --}}
            @if (session('welcome'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                    class="fixed top-4 transform -translate-x-1/2 left-1/2 z-50 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-center max-w-3xl mx-auto mb-6"
                    role="alert">
                    <strong class="font-bold">{{ session('welcome') }}</strong>
                    <br>
                    <i class="text-xs">Anda login sebagai <b>{{ Auth::user()->getRoleNames()->first() }}</b></i>
                </div>
            @endif
            {{ $slot }}

        </div>

        {{-- right sidebar --}}
        <livewire:right-sidebar />


    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>


</body>

</html>
