<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="flex justify-end">
        <button type="button"
            class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
            <i class="fa-solid fa-plus me-2"></i>
            Tambah Materi</button>
    </div>

    {{-- form --}}
    <form wire:submit.prevent='save'>
        <div class="mb-3">
            <label class="block text-sm">Kategori</label>
            <select wire:model='kategori_materi_id' class="w-full border p-2 rounded" name="" id="">
                <option value="">--- Pilih Kategori ---</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
            @error('kategori_materi_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Judul Materi</label>
            <input type="text" wire:model='judul' class="w-full border p-2 rounded" name="" id="">
            @error('judul')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Deskripsi Materi</label>
            <input type="text" wire:model='deskripsi' class="w-full border p-2 rounded" name=""
                id="">
            @error('deskripsi')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block text-sm">Upload PDF</label>
            <input type="file" wire:model="file" accept="application/pdf" class="w-full border p-2 rounded">
            @error('file_path')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            @if ($file_path)
                <p class="text-sm text-gray-600 mt-1">File dipilih: {{ $file->getClientOriginalName() }}</p>
            @endif
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>

    </form>
</div>
