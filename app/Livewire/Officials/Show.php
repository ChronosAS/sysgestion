<?php

namespace App\Livewire\Officials;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    #[Layout('layouts.app',['header'=>'Funcionario'])]
    public function render()
    {
        return view('livewire.officials.show');
    }
}
