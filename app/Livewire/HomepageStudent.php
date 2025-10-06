<?php

namespace App\Livewire;

use Livewire\Component;

class HomepageStudent extends Component
{
    public function render()
    {
        session()->forget('back_url');
        return view('livewire.homepage-student');
    }
}
