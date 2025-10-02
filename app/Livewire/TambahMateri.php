<?php

namespace App\Livewire;

use App\Models\KategoriMateri;
use App\Models\Materi;
use Livewire\Component;

class TambahMateri extends Component
{
    public $kategori_materi_id, $judul, $deskripsi, $file_path;

    public function save()
    {
        $this->validate([
            'kategori_materi_id' => 'required|exists:kategori_materi,id',
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file_path' => 'required|mimes:pdf|max:5120',
        ]);

        $filePath = $this->file_path->store('materi', 'public');

        Materi::create([
            'kategori_materi_id' => $this->kategori_materi_id,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'file_path' => $filePath
        ]);

        session()->flash('success', 'Materi berhasil ditambahkan');
        $this->reset(['judul', 'deskripsi', 'kategori_materi_id','file_path']);
    }

    public function render()
    {
        $kategoris = KategoriMateri::all();
        return view('livewire.tambah-materi', compact('kategoris'));
    }
}
