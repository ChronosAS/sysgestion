<?php

namespace App\Livewire\Medicines\Donations;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.medicines.donations.show');
    }
}
