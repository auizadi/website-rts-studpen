<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-bold text-xl text-white dark:text-gray-400 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (session('welcome'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
            class="fixed top-4 transform -translate-x-1/2 left-1/2 z-50 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded text-center max-w-3xl mx-auto mb-6"
            role="alert">
            <strong class="font-bold">{{ session('welcome') }}</strong>
            <br>
            <i class="text-xs">Anda login sebagai <b>{{ Auth::user()->getRoleNames()->first() }}</b></i>
        </div>
    @endif
</x-app-layout>
