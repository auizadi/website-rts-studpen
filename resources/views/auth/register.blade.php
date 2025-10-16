<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 ">
            <!-- Nama -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Nama Kampus -->
            <div>
                <x-input-label for="nama_kampus" :value="__('Nama Kampus')" />
                <x-text-input id="nama_kampus" class="block mt-1 w-full" type="text" name="nama_kampus"
                    :value="old('nama_kampus')" required autocomplete="nama_kampus" />
                <x-input-error :messages="$errors->get('nama_kampus')" class="mt-2" />
            </div>

            <!-- Program Studi -->
            <div>
                <x-input-label for="program_studi" :value="__('Program Studi')" />
                <x-text-input id="program_studi" class="block mt-1 w-full" type="text" name="program_studi"
                    :value="old('program_studi')" required autocomplete="off" />
                <x-input-error :messages="$errors->get('program_studi')" class="mt-2" />
            </div>

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Dropdown magang/studpen -->
            <div class="lg:col-span-2">
                <x-input-label for="kategori_mbkm" :value="__('Pilih Bidang')" />
                <select id="kategori_mbkm" name="kategori_mbkm"
                    class="block mt-2 w-full text-sm text-gray-900 border cursor-pointer bg-gray-50 dark:text-gray-400  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('kategori_mbkm') border-red-300 @enderror">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="XR" {{ old('kategori_mbkm') == 'XR' ? 'selected' : '' }}>Mix-Reality</option>
                    <option value="webdev" {{ old('kategori_mbkm') == 'webdev' ? 'selected' : '' }}>Web Developer
                    </option>
                </select>
                <x-input-error :messages="$errors->get('kategori_mbkm')" class="mt-2" />
            </div>
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <!-- Upload CV -->
            <div>
                <x-input-label for="cv" :value="__('Upload CV')" />
                <input id="cv" name="cv" type="file" accept=".pdf" required
                    aria-describedby="file_input_help"
                    class="block mt-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX. 2MB).</p>

                <x-input-error :messages="$errors->get('cv')" class="mt-2" />
            </div>

            <!-- Upload Surat Pengantar -->
            <div>
                <x-input-label for="surat_pengantar" :value="__('Upload Surat Pengantar')" />
                <input id="surat_pengantar" name="surat_pengantar" type="file" accept=".pdf" required
                    aria-describedby="file_input_help"
                    class="block mt-2 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" />
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF (MAX. 2MB).</p>

                <x-input-error :messages="$errors->get('surat_pengantar')" class="mt-2" />
            </div>
        </div>

        <!-- Tombol Daftar -->
        <div class="flex items-center justify-end py-2">
            <a href="{{ route('login') }}"
                class="underline text-sm text-gray-500 hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Sudah Mendaftar?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>


</x-guest-layout>
