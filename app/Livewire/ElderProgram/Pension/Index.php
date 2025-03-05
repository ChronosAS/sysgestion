<?php

namespace App\Livewire\ElderProgram\Pension;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.elder-program.pension.index');
    }
}
