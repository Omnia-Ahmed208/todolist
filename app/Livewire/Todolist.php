<?php

namespace App\Livewire;

use Livewire\Component;

class Todolist extends Component
{
    public function index()
    {
        if(auth()->user()){
            return view('welcome');
        }
        else{
            return view('livewire.todolist');
        }
    }

    public function render()
    {
        return view('livewire.todolist');
    }
}
