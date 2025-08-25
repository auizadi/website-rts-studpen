<?php

namespace App\Livewire;

use Livewire\Component;

class CardCarrers extends Component
{
    public $image;
    public $title;
    public $description;
    public $detailContent;
    public $loginRoute;

    public $showModal = false;

    public function mount($image, $title, $description, $detailContent, $loginRoute) {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->detailContent = $detailContent;
        $this->loginRoute = $loginRoute;
    }

    public function toggleModal(){
        $this->showModal = !$this->showModal;
        
    }

    public function render()
    {
        return view('livewire.card-carrers');
    }
}
