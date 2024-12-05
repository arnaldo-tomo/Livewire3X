<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 1;
    public $name = '';
    public $title = '';

    public $content = '';
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }

    public function userSaverr()
    {


        return $this->name;
    }



    public function save()
    {
        return $this->URl('dashboard');
    }
}