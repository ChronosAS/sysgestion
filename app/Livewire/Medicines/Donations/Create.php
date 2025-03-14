<?php

namespace App\Livewire\Medicines\Donations;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Create extends Component
{
    public $genders = [
        'male' => 'Masculino',
        'female' => 'Femenino',
    ];

    public $gender;

    public function render()
    {
        return view('livewire.medicines.donations.create');
    }
}
