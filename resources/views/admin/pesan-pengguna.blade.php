<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-bold text-xl text-white dark:text-gray-400 leading-tight">
            {{ __('Pesan Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="overflow-x-auto rounded-lg">
                <table class="w-full  text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Pesan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesans as $pesan)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $pesan->nama_pengirim }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pesan->user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pesan->content }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $pesan->created_at->timezone('Asia/Jakarta')->format('d M Y H:i') }}
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center">Belum ada pesan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $pesans->links() }}
            </div>

        </div>
    </div>
</x-app-layout>
