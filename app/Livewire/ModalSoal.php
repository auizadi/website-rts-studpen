<?php

namespace App\Livewire;

use App\Models\Quizzes;
use Livewire\Component;

class ModalSoal extends Component
{
    public $show = false;
    public $nama_soal;

    protected $listeners = ['openModalSoal' => 'open'];

    public function open()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->reset(['show', 'nama_soal']);
    }

    public function save()
    {
        $this->validate([
            'nama_soal' => 'required|string|max:255'
        ]);

        Quizzes::create([
            'nama_soal' => $this->nama_soal
        ]);

        $this->dispatch('soalAdded');
        $this->close();
    }

    public function render()
    {
        return view('livewire.modal-soal');
    }
}
