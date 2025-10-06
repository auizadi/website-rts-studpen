<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Tambah Materi Baru</h1>
        </div>

        <!-- Form Container -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-6">
                <!-- Flash Messages -->
                @if (session()->has('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-green-800 font-medium">{{ session('success') }}</span>
                        </div>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-red-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-red-800 font-medium">{{ session('error') }}</span>
                        </div>
                    </div>
                @endif

                <form wire:submit.prevent="simpan" class="space-y-6">
                    <!-- Field Kategori -->
                    <div>
                        <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">
                            Kategori Materi <span class="text-red-500">*</span>
                        </label>
                        <select
                            id="kategori"
                            wire:model="kategori"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('kategori') border-red-300 @enderror"
                        >
                            <option value="" disabled>Pilih Kategori</option>
                            <option value="Pemrograman">Pemrograman</option>
                            <option value="Desain">Desain</option>
                            <option value="Database">Database</option>
                        </select>
                        @error('kategori')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Field Judul -->
                    <div>
                        <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">
                            Judul Materi <span class="text-red-500">*</span>
                        </label>
                        <input
                            type="text"
                            id="judul"
                            wire:model="judul"
                            placeholder="Masukkan judul materi"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('judul') border-red-300 @enderror"
                        >
                        @error('judul')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Field Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">
                            Deskripsi Materi <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            id="deskripsi"
                            wire:model="deskripsi"
                            rows="4"
                            placeholder="Tuliskan deskripsi lengkap tentang materi ini"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('deskripsi') border-red-300 @enderror"
                        ></textarea>
                        @error('deskripsi')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Field Upload PDF -->
                    <div>
                        <label for="file_pdf" class="block text-sm font-medium text-gray-700 mb-2">
                            Upload File PDF <span class="text-red-500">*</span>
                        </label>

                        <!-- File Input -->
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md @error('file_pdf') border-red-300 @enderror">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <div class="flex text-sm text-gray-600">
                                    <label for="file_pdf" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                        <span>Upload file PDF</span>
                                        <input
                                            id="file_pdf"
                                            type="file"
                                            wire:model="file_pdf"
                                            class="sr-only"
                                            accept=".pdf"
                                        >
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>

                                <p class="text-xs text-gray-500">
                                    PDF maksimal 10MB
                                </p>
                            </div>
                        </div>

                        <!-- File Preview -->
                        @if ($file_pdf)
                            <div class="mt-3 p-3 bg-green-50 border border-green-200 rounded-md">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium text-green-800">{{ $file_pdf->getClientOriginalName() }}</span>
                                    </div>
                                    <button
                                        type="button"
                                        wire:click="$set('file_pdf', null)"
                                        class="text-red-500 hover:text-red-700"
                                    >
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endif

                        @error('file_pdf')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex justify-end pt-6 border-t border-gray-200">
                        <button
                            type="submit"
                            wire:loading.attr="disabled"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed transition duration-200"
                        >
                            <!-- Loading Spinner -->
                            <svg wire:loading wire:target="simpan" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>

                            <span wire:loading.remove wire:target="simpan">Simpan Materi</span>
                            <span wire:loading wire:target="simpan">Menyimpan...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>