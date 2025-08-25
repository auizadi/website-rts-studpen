<?php

namespace App\Livewire;

use App\Models\Options;
use App\Models\Questions;
use App\Models\Quizzes;
use Livewire\Component;

class BuatSoal extends Component
{

    public $quizId;            // id quiz
    public $quiz;
    public $pertanyaan;        // pertanyaan
    public $opsi = ['', '', '', '']; // 4 opsi jawaban
    public $benar;             // index jawaban benar

    public function mount(Quizzes $quiz)
    {
        $this->quizId = $quiz->id;
        $this->quiz = $quiz;
    }
    public function save()
    {
        $this->validate([
            'pertanyaan' => 'required|string',
            'opsi.*'     => 'required|string',
            'benar'      => 'required|integer|min:0|max:3',
        ]);

        // simpan pertanyaan
        $question = Questions::create([
            'quiz_id'    => $this->quizId,
            'pertanyaan' => $this->pertanyaan,
        ]);

        // simpan opsi
        foreach ($this->opsi as $index => $teks) {
            Options::create([
                'question_id' => $question->id,
                'teks'        => $teks,
                'is_correct'  => ($this->benar == $index),
            ]);
        }

        // reset form
        $this->reset(['pertanyaan', 'opsi', 'benar']);

        // flash message
        session()->flash('success', 'Berhasil menambahkan soal');

        // biar tampilan daftar soal refresh
        $this->dispatch('questionAdded');
    }

    public function render()
    {
        return view('livewire.buat-soal');
    }
}
