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
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10">
        <table class="w-full text-sm rtl:text-right text-gray-500 text-center dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Instruktur
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($instrukturs as $instruktur)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $instruktur->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $instruktur->email }}
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('instruktur.destroy', $instruktur->id) }} " method="POST"
                                onsubmit="return confirm('Apakah anda yakin menghapus akun instruktur?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white hover:bg-red-700 rounded-lg px-3 py-1">Hapus</button>

                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center">Belum ada instruktur.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
