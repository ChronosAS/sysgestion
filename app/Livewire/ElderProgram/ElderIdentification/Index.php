<?php

namespace App\Livewire\ElderId;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.elder-identification.show', ['elder' => $this->elder]);
    }
}
