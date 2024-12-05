<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public function render()
    {
        return view('livewire.settings.create');
    }


    public function userSaver(){


        return view('dashboard');
    }
}