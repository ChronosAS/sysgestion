<?php

namespace App\Livewire\Officials;

use Livewire\Component;
use Livewire\Attributes\Layout;
class Edit extends Component
{   
    #[Layout('layouts.app',['header'=>'Editar Funcionario'])]
    public function render()
    {
        return view('livewire.officials.edit');
    }
}
