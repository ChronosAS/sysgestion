<?php

namespace App\Livewire\Officials;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app',['header'=>'Funcionarios'])]
    public function render()
    {
        return view('livewire.officials.index');
    }
}
