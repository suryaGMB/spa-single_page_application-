<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[layout('layout.app')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
