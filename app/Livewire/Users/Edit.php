<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('layouts.app',['header'=>'Editar Usuario'])]
    public function render()
    {
        return view('livewire.users.edit');
    }
}
