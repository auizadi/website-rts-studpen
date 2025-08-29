<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $fillable = ['question_id', 'teks', 'is_correct'];

    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id');
    }
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
