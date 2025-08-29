<?php

namespace App\Livewire;

use App\Models\Questions;
use App\Models\Quizzes;
use Livewire\Attributes\On;
use Livewire\Component;

class RightSidebar extends Component
{
    public function render()
    {
        return view('livewire.right-sidebar');
    }
}
