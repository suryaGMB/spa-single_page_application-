<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[layout('layout.app')]

class About extends Component
{
    public function render()
    {
        return view('livewire.about');
    }
}
