<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Quizzes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class KerjakanSoal extends Component
{
    public $quiz;
    public $answers = []; // array utk jawaban siswa

    public function mount(Quizzes $quiz)
    {
        $this->quiz = $quiz;
    }

    public function save()
    {
        // Simpan jawaban siswa
        foreach ($this->answers as $questionId => $optionId) {
            Answer::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                    'quiz_id' => $this->quiz->id,
                    'question_id' => $questionId,
                ],
                ['option_id' => $optionId]
            );
        }

        // Hitung jumlah benar
        $benar = Answer::where('user_id', Auth::id())
            ->where('quiz_id', $this->quiz->id)
            ->whereHas('option', fn($q) => $q->where('is_correct', true))
            ->count();

        // Hitung total soal
        $total = $this->quiz->questions()->count();

        // Skala 100
        $nilai = $total > 0 ? ($benar / $total) * 100 : 0;

        // Kirim feedback ke siswa
        session()->flash('success', "Jawaban tersimpan! Nilai kamu: {$nilai}");
    }


    public function render()
    {
        return view('livewire.kerjakan-soal', [
            'quiz' => $this->quiz->load('questions.options'),
        ]);
    }
}
