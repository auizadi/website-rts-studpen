<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Materi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'judul',
        'deskripsi',
        'file_path',
        'file_name',
        'file_size',
        'slug',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($materi) {
            $materi->slug = Str::slug($materi->judul);

            // Handle duplicate slugs
            $originalSlug = $materi->slug;
            $count = 1;
            while (static::where('slug', $materi->slug)->exists()) {
                $materi->slug = $originalSlug . '-' . $count;
                $count++;
            }
        });

        static::updating(function ($materi) {
            if ($materi->isDirty('judul')) {
                $materi->slug = Str::slug($materi->judul);

                // Handle duplicate slugs
                $originalSlug = $materi->slug;
                $count = 1;
                while (static::where('slug', $materi->slug)->where('id', '!=', $materi->id)->exists()) {
                    $materi->slug = $originalSlug . '-' . $count;
                    $count++;
                }
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeByKategori($query, $kategori)
    {
        return $query->where('kategori', $kategori);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('judul', 'like', "%{$search}%")
            ->orWhere('deskripsi', 'like', "%{$search}%");
    }

    public function getFormattedFileSizeAttribute()
    {
        if (!$this->file_size) {
            return '0 Bytes';
        }

        $size = (int) $this->file_size;
        $units = ['Bytes', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $size > 1024; $i++) {
            $size /= 1024;
        }

        return round($size, 2) . ' ' . $units[$i];
    }

    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }

    public function isPemrograman()
    {
        return $this->kategori === 'Pemrograman';
    }

    public function isDesain()
    {
        return $this->kategori === 'Desain';
    }

    public function isDatabase()
    {
        return $this->kategori === 'Database';
    }

    public function getCategoryColorAttribute()
    {
        return match ($this->kategori) {
            'Pemrograman' => 'blue',
            'Desain' => 'green',
            'Database' => 'purple',
            default => 'gray'
        };
    }

    public function getCategoryBadgeClassAttribute()
    {
        return match ($this->kategori) {
            'Pemrograman' => 'bg-blue-100 text-blue-800',
            'Desain' => 'bg-green-100 text-green-800',
            'Database' => 'bg-purple-100 text-purple-800',
            default => 'bg-gray-100 text-gray-800'
        };
    }
}
