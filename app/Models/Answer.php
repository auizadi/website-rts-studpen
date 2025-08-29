<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Answer extends Model
{
    protected $fillable = ['user_id', 'quiz_id', 'question_id', 'option_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quizzes::class, 'quiz_id');
    }

    public function question()
    {
        return $this->belongsTo(Questions::class, 'question_id');
    }

    public function option()
    {
        return $this->belongsTo(Options::class, 'option_id');
    }
}
