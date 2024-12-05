<?php

namespace App\Livewire;

use App\Models\Produtos;
use App\Models\User;
use Livewire\Component;

class Counter extends Component
{

    public $color="";
    public $id;
    public $name = '';
    public $category = '';
    public $price = '';

    public $search='';
    public $user=[];

    public function render()
    {
        $this->user= Produtos::where('name', 'like', '%' . $this->search . '%')
        ->orWhere('category', 'like', '%' . $this->search . '%')
        ->get();
        return view('livewire.counter');
    }

    public function delete($id)
    {
      $user=  Produtos::findOrFail($id);
      $user->delete();

      $this->clear();
      session()->flash('message', 'Post successfully Deleted Successfully');

    }


    public function salvar()
    {
        $this->validate([
            'color'=>'required',
            'category'=>'required',
            'name'=>'required',
        ]);
        Produtos::create([
            'name' => $this->name,
            'category' => $this->category,
            'color'=>$this->color,
            'price'=>$this->price,

        ]);

        $this->clear();

        session()->flash('message','User created successfully');

    }

    public function clear(){
        $this->color='';
        $this->name='';
        $this->category='';
        $this->price='';
    }
}
