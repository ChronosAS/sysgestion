<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $password;
    public $role;

    #[Layout('layouts.app',['header'=>'Crear Usuario'])]
    public function render()
    {
        return view('livewire.users.create',[
            'roles' => ['1'=>'first','2' => 'second']
        ]);
    }
}
