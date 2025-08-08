<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        $flashMessage = Session::get('success');
        return view('livewire.beranda', [
            'flashMessage' => $flashMessage
        ]);
    }
}
