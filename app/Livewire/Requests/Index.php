<?php

namespace App\Livewire\Requests;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app',['header'=>'Solicitudes'])]
    public function render()
    {
        return view('livewire.requests.index');
    }
}
