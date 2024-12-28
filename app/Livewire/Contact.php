<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Routing\Route;

class Contact extends Component
{
    public $isOpen = false;
    public function render()
    {
        // dd($previou   );
        return view('livewire.contact.render');
    }

    public function toggleModal()
    {
        $this->isOpen = !$this->isOpen;
    }

}