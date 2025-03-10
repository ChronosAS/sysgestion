<?php

namespace App\Livewire\ElderProgram\Pension;

use App\Models\PensionReport;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Show extends Component
{
    public PensionReport $pensionReport;

    public function render()
    {
        return view('livewire.elder-program.pension.show');
    }
}
