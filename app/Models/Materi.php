<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = ['kategori_materi_id', 'judul', 'deskripsi', 'file_path'];

    public function kategoriMateri()
    {
        return $this->belongsTo(KategoriMateri::class);
    }
}
