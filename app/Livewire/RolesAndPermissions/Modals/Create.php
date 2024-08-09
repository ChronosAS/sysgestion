<?php

namespace App\Livewire\RolesAndPermissions\Modals;

use App\Models\Role;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $showCreateRoleModal = false;

    #[On('createRole')]
    public function toggleModal()
    {
        $this->showCreateRoleModal = !$this->showCreateRoleModal;
    }

    public function save()
    {
        $this->validate([
            'name' => ['required','string','max:50']
        ],[
            'name.required' => 'Porfavor ingrese un nombre.',
            'name.string' => 'Formato de nombre invalido.',
            'name.max' => 'Nombre exede el tamaño maximo de 50 caracteres.',
        ]);
    }

    public function render()
    {
        return view('livewire.roles-and-permissions.modals.create');
    }
}
