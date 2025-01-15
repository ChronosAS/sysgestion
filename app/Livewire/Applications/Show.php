<?php

namespace App\Livewire\Applications;

use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public Application $application;

    #[Layout('layouts.app',['header'=>'Solicitud'])]
    public function render()
    {
        return view('livewire.applications.show');
    }
}
