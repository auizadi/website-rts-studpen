<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Questions;
use App\Models\Quizzes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowSoal extends Component
{
    public $quiz;
    public $answers = [];
    public $score = null;

    public function mount(Quizzes $quiz)
    {
        $this->quiz = $quiz->load('questions.options');

        // jika siswa, ambil jawaban mereka
        if (Auth::user()->hasRole('siswa')) {
            $this->answers = Answer::where('user_id', Auth::id())
                ->where('quiz_id', $quiz->id)
                ->pluck('option_id', 'question_id') // hasil: [question_id => option_id]
                ->toArray();

            // hitung nilai siswa
            $benar = Answer::where('user_id', Auth::id())
                ->where('quiz_id', $quiz->id)
                ->whereHas('option', fn($q) => $q->where('is_correct', true))
                ->count();

            $total = $quiz->questions->count();
            $this->score = $total > 0 ? round(($benar / $total) * 100, 2) : 0;
        }
    }

    public function publish()
    {
        $this->quiz->update(['is_published' => true]);
        session()->flash('success', 'Soal berhasil diunggah dan sekarang bisa dilihat siswa');

        return redirect()->route('soal');
    }

    public function render()
    {
        return view('livewire.show-soal');
    }
}
