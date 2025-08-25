<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    protected $fillable = ['nama_soal'];

    public function questions()
    {
        return $this->hasMany(Questions::class, 'quiz_id');
    }
}
