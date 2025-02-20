<?php

namespace App\Livewire\ElderProgram;

use App\Models\ElderProgramApplication;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Show extends Component
{
    public ElderProgramApplication $elderProgramApplication;

    public function render()
    {
        return view('livewire.elder-program.show');
    }
}
