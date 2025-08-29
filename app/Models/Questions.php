<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['quiz_id', 'pertanyaan'];

    public function quiz()
    {
        return $this->belongsTo(Quizzes::class, 'quiz_id');
    }

    public function options()
    {
        return $this->hasMany(Options::class, 'question_id');
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }


}
