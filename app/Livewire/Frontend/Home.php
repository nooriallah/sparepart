<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{


    #[Layout("layouts.guest")]
    public function render()
    {
        return view('livewire.frontend.home');
    }
}
