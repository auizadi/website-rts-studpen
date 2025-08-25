<?php

namespace App\Livewire;

use App\Models\Quizzes;
use Livewire\Component;
use Livewire\WithPagination;

class SoalList extends Component
{
    use WithPagination;
    protected $listeners = ['soalAdded' => 'refreshSoal'];
    public function refreshSoal()
    {
        $this->resetPage();
    }
    public function render()
    {
        $quizzes = Quizzes::oldest()->paginate(3);
        return view('livewire.soal-list', compact('quizzes'));
    }
}
