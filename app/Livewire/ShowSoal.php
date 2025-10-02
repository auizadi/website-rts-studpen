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
    public $page = 1;
    public $perPage = 5;

    // state edit
    public $editMode = false;
    public $editQuestionId;
    public $pertanyaan;
    public $opsi = [];
    public $benar;

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

    public function edit($id)
    {
        $question = Questions::with('options')->findOrFail($id);
        $this->editMode = true;
        $this->editQuestionId = $id;
        $this->pertanyaan = $question->pertanyaan;
        $this->opsi = $question->options->pluck('teks')->toArray();
        $this->benar = $question->options->search(fn($opt) => $opt->is_correct);
    }

    // update data
    public function update()
    {
        $this->validate([
            'pertanyaan' => 'required|string',
            'opsi.*'     => 'required|string',
            'benar'      => 'required|integer|min:0|max:3',
        ]);

        $question = Questions::findOrFail($this->editQuestionId);
        $question->update(['pertanyaan' => $this->pertanyaan]);

        // update opsi
        foreach ($question->options as $i => $opt) {
            $opt->update([
                'teks' => $this->opsi[$i],
                'is_correct' => ($this->benar == $i),
            ]);
        }

        $this->reset(['editMode', 'editQuestionId', 'pertanyaan', 'opsi', 'benar']);
        $this->quiz->load('questions.options');

        session()->flash('success', 'Soal berhasil diperbarui!');
    }

    public function cancelEdit()
    {
        $this->reset(['editMode', 'editQuestionId', 'pertanyaan', 'opsi', 'benar']);
    }

    public function delete($id)
    {
        $question = Questions::findOrFail($id);

        // hapus opsi jawaban dulu
        $question->options()->delete();

        // hapus pertanyaan
        $question->delete();

        session()->flash('success', 'Pertanyaan berhasil dihapus!');

        // refresh relasi supaya tampilan update
        $this->quiz->load('questions.options');
    }

    public function publish()
    {
        $this->quiz->update(['is_published' => true]);
        session()->flash('success', 'Soal berhasil diunggah dan sekarang bisa dilihat siswa');

        return redirect()->route('soal');
    }

    public function nextPage()
    {
        if ($this->page * $this->perPage < $this->quiz->questions->count()) {
            $this->page++;
        }
    }

    public function prevPage()
    {
        if ($this->page > 1) {
            $this->page--;
        }
    }
    public function render()
    {
        $questions = $this->quiz->questions
            ->slice(($this->page - 1) * $this->perPage, $this->perPage)
            ->values(); // ambil soal per halaman
        // hitung total halaman
        $totalPages = (int) ceil($this->quiz->questions->count() / $this->perPage);
        return view('livewire.show-soal', compact('questions', 'totalPages'));
    }
}
