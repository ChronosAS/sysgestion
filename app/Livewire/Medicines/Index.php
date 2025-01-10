<?php

namespace App\Livewire\Medicines;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app',['header'=>'Medicamentos'])]
    public function render()
    {
        return view('livewire.medicines.index');
    }
}
