<?php

namespace App\Livewire;

use Livewire\Component;

class MailLog extends Component
{
    public $number =1;
    public function render()
    {
        return view('livewire.mail-log');
    }
}