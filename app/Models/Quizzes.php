<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    protected $fillable = ['nama_soal', 'is_published'];

    public function questions()
    {
        return $this->hasMany(Questions::class, 'quiz_id');
    }
    public function answers()
    {
        return $this->hasMany(Answer::class, 'quiz_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'answers')
            ->withPivot(['question_id', 'option_id'])
            ->withTimestamps();
    }
}
