<?php

namespace App\Livewire;

use App\Models\Materi;
use Livewire\Component;

class ShowMateri extends Component
{
    public $materis;
    public $kategoriList;

    public function mount() {
        $this->materis = Materi::all();
        $this->kategoriList = $this->materis->pluck('kategori')->unique();
    }
    public function render()
    {
        return view('livewire.show-materi');
    }
}
