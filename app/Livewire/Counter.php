<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{

    public $count = 1;
    public $id;
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
        $user = User::all();
        return view('livewire.counter',['user' => $user]);
    }

    public function delete($id)
    {
      $user=  User::findOrFail($id);
    //   $this->authorize('delete',$user);
    $user->delete();


        session()->flash('sucess', 'Post successfully Deleted Successfully');

    }



    public function save()
    {
        return $this->URl('dashboard');
    }
}
