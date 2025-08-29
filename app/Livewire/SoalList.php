<?php

namespace App\Livewire;

use App\Models\Quizzes;
use Livewire\Component;
use Livewire\WithPagination;

class SoalList extends Component
{
    use WithPagination;

    public $search = '';

    protected $listeners = ['soalAdded' => 'refreshSoal'];

    public function refreshSoal()
    {
        $this->resetPage();
        session()->flash('success', 'Berhasil menambahkan soal');
    }

    public function render()
    {
        $query = Quizzes::query()
            ->where('nama_soal', 'like', '%' . $this->search . '%')
            ->withCount('questions');

        if (auth()->user()->hasRole('siswa')) {
            $query->where('is_published', true);
        }

        $quizzes = $query->paginate(3);

        return view('livewire.soal-list', compact('quizzes'));
    }
}
