<?php

namespace App\Livewire\Permits;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    #[Layout('layouts.app',['header'=>'Permisos'])]
    public function render()
    {
        return view('livewire.permits.create');
    }
}
