<?php

namespace App\Livewire\Officials;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Create extends Component
{
    #[Layout('layouts.app',['header'=>'Crear Funcionario'])]
    public function render()
    {
        return view('livewire.officials.create');
    }
}
