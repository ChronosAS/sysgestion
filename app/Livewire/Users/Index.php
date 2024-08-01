<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app',['header'=>'Usuarios'])]
    public function render()
    {
        return view('livewire.users.index');
    }
}
