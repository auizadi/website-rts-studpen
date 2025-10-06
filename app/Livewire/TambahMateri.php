<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Materi;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahMateri extends Component
{
    use WithFileUploads;

    public $kategori = '';
    public $judul = '';
    public $deskripsi = '';
    public $file_pdf;
    public $isUploading = false;

    protected $rules = [
        'kategori' => 'required|in:Pemrograman,Desain,Database',
        'judul' => 'required|min:5|max:255',
        'deskripsi' => 'required|min:10',
        'file_pdf' => 'required|mimes:pdf|max:10240', // max 10MB
    ];

    protected $messages = [
        'kategori.required' => 'Pilih kategori materi.',
        'kategori.in' => 'Kategori yang dipilih tidak valid.',
        'judul.required' => 'Judul materi harus diisi.',
        'judul.min' => 'Judul materi minimal 5 karakter.',
        'deskripsi.required' => 'Deskripsi materi harus diisi.',
        'deskripsi.min' => 'Deskripsi materi minimal 10 karakter.',
        'file_pdf.required' => 'File PDF harus diupload.',
        'file_pdf.mimes' => 'File harus berupa PDF.',
        'file_pdf.max' => 'Ukuran file maksimal 10MB.',
    ];

    public function render()
    {
        return view('livewire.tambah-materi');
    }

    public function simpan()
    {
        $this->validate();

        $this->isUploading = true;

        try {
            // Generate nama file
            $fileName = time() . '_' . Str::slug($this->judul) . '.pdf';
            $filePath = $this->file_pdf->storeAs('materi', $fileName, 'public');

            // Simpan data ke database
            Materi::create([
                'kategori' => $this->kategori,
                'judul' => $this->judul,
                'deskripsi' => $this->deskripsi,
                'file_path' => $filePath,
                'file_name' => $this->file_pdf->getClientOriginalName(),
                'file_size' => $this->file_pdf->getSize(),
            ]);

            // Reset form
            $this->reset(['kategori', 'judul', 'deskripsi', 'file_pdf']);

            session()->flash('success', 'Materi berhasil disimpan!');
        } catch (\Exception $e) {
            // Hapus file yang sudah diupload jika ada error
            if (isset($filePath) && Storage::disk('public')->exists($filePath)) {
                Storage::disk('public')->delete($filePath);
            }

            session()->flash('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        $this->isUploading = false;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Clean up temporary files
     */
    public function cleanupTempFiles()
    {
        if ($this->file_pdf) {
            $this->file_pdf->delete();
        }
    }
}
