<x-app-layout>
    <x-slot name='header'>
        <h2 class="font-bold text-xl text-white dark:text-gray-400 leading-tight">
            {{ __('Pendaftaran') }}
        </h2>
    </x-slot>
    {{-- tabel --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-10">
        <table class="w-full text-sm rtl:text-right text-gray-500 text-center dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Mahasiswa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Kampus
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Program Studi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Posisi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        CV
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Surat Pengantar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>

                </tr>
            </thead>
            <tbody>
                @forelse ($pendaftars as $pendaftar)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $pendaftar->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pendaftar->nama_kampus }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pendaftar->program_studi }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pendaftar->email }}
                        </td>
                        <td class="px-6 py-4 capitalize">
                            {{ $pendaftar->kategori_mbkm ?? '-' }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($pendaftar->cv)
                                <a href="{{ asset('storage/' . $pendaftar->cv) }}" target="_blank"
                                    class="text-white px-3 py-1 bg-blue-500 rounded-md">Lihat</a>
                            @else
                                <span class="text-gray-400 text-center ">-</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 ">
                            @if ($pendaftar->surat_pengantar)
                                <a href="{{ asset('storage/' . $pendaftar->surat_pengantar) }}" target="_blank"
                                    class="text-white px-3 py-1 bg-blue-500 rounded-md">Lihat</a>
                            @else
                                <span class="text-gray-400 text-center">-</span>
                            @endif
                        </td>
                        {{-- berkas --}}
                        <td class="px-6 py-4 flex flex-row gap-2">
                            @if ($pendaftar->status === 'pending')
                                <form action="{{ route('updateStatus', $pendaftar->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="diterima">
                                    <button type="submit"
                                        class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded text-sm">Diterima</button>
                                </form>
                                <form action="{{ route('updateStatus', $pendaftar->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="ditolak">
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">Ditolak</button>
                                </form>
                            @elseif ($pendaftar->status === 'diterima')
                                <span class="text-green-600 font-semibold">Diterima</span>
                            @elseif ($pendaftar->status === 'ditolak')
                                <span class="text-red-600 font-semibold">Ditolak</span>
                            @endif
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="px-6 py-4 text-center">Belum ada pendaftar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
