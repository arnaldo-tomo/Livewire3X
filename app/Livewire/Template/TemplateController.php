<?php

namespace App\Livewire\Template;

use Livewire\Component;

class TemplateController extends Component
{

    public $isclosed = false;
    public $alertOpen = false;
    public function render()
    {
        return view('livewire.template.template-controller');
    }

    public function toggle(){
        $this->isclosed =! $this->isclosed;
    }

    public function bts(){
        $this->toggle();
        $this->alertOpen();
    }

    public function alertOpen(){
       $this->alertOpen= ! $this->alertOpen;
    }

    public function alertclose(){
         $this->alertOpen=false;
    }

}