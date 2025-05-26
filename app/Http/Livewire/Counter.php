<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $name = '';

    public function mount()
    {
        $this->name = '名無し';
    }

    // public function updated()
    // {
    //     $this->name = '変更済み';
    // }

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
