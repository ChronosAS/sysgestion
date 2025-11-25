<?php

namespace App\Livewire\Officials;

use App\Models\Official;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public Official $official;

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.officials.show');
    }
}
