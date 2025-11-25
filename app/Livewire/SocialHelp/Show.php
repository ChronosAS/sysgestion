<?php

namespace App\Livewire\SocialHelp;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Show extends Component
{
    public function render()
    {
        return view('livewire.social-help.show');
    }
}
