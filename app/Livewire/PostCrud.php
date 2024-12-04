<?php

namespace App\Livewire;

use Livewire\Component;

class PostCrud extends Component
{
    public $count = 3;

    public function render()
    {


        return view('livewire.post-crud',['count'=>$this->count]);
    }


    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
}