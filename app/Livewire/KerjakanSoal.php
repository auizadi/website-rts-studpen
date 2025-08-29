<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Quizzes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class KerjakanSoal extends Component
{
    public $quiz;
    public $answers = [];
    public $currentIndex = 0;

    public function mount(Quizzes $quiz)
    {
        $this->quiz = $quiz->load('questions.options');
    }

    // Pindah ke soal tertentu (klik grid nomor)
    public function goToQuestion($index)
    {
        if ($index >= 0 && $index < $this->quiz->questions->count()) {
            $this->currentIndex = $index;
        }
    }

    // Simpan jawaban
    public function save()
    {
        foreach ($this->quiz->questions as $q) {
            if (!isset($this->answers[$q->id])) {
                $this->addError('answers.' . $q->id, 'Pertanyaan ini wajib diisi.');
            }
        }

        if ($this->getErrorBag()->isNotEmpty()) {
            return;
        }

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

        session()->flash('success', 'Jawaban berhasil dikirim!');
        return redirect()->route('soal'); // balik ke list soal
    }

    public function render()
    {
        return view('livewire.kerjakan-soal', [
            'quiz' => $this->quiz,
            'total' => $this->quiz->questions->count(),
            'currentQuestion' => $this->quiz->questions[$this->currentIndex] ?? null,
        ]);
    }
}
