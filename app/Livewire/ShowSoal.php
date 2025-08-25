<?php

namespace App\Livewire;

use App\Models\Questions;
use App\Models\Quizzes;
use Livewire\Component;

class ShowSoal extends Component
{
    public $quizId;

    public function mount($quiz)
    {
        $this->quizId = $quiz;
    }

    public function render()
    {
        // Ambil quiz beserta relasi questions + options
        $quiz = Quizzes::with('questions.options')->findOrFail($this->quizId);

        return view('livewire.show-soal', [
            'quiz' => $quiz,
        ]);
    }
}
