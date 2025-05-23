<?php

namespace App\Livewire\Medicines\Donations;

use App\Models\Donation;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Show extends Component
{
    public Donation $donation;

    public function render()
    {
        return view('livewire.medicines.donations.show');
    }
}
