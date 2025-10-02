<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriMateri extends Model
{
    protected $fillable = ['nama_kategori'];

    public function materis()
    {
        return $this->hasMany(Materi::class);
    }
}
