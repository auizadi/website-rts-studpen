<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['user_id', 'quiz_id', 'question_id', 'option_id'];

    public function question()
    {
        return $this->belongsTo(Questions::class);
    }

    public function option()
    {
        return $this->belongsTo(Options::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quizzes::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
