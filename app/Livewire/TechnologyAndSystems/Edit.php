<?php

namespace App\Livewire\TechnologyAndSystems;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Edit extends Component
{
    public function render()
    {
        return view('livewire.technology-and-systems.edit');
    }
}
