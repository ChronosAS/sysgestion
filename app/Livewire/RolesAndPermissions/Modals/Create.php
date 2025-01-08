<?php

namespace App\Livewire\RolesAndPermissions\Modals;

use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Create extends Component
{
    #[Validate('required',message: 'Porfavor ingrese un nombre.')]
    #[Validate('unique:roles',message: 'Ya existe un rol con este nombre.')]
    #[Validate('string',message: 'Formato de nombre invalido.')]
    #[Validate('max:50',message: 'Nombre exede el tamaño maximo de 50 caracteres.')]
    public $name;
    public $permissions = [];
    public $showCreateRoleModal = false;

    #[On('createRoleModal')]
    public function toggleModal()
    {
        $this->reset(['name','permissions']);

        $this->showCreateRoleModal = !$this->showCreateRoleModal;

    }

    public function save()
    {
        $this->validate();

        $this->role->update(['name'=>$this->name]);
        $this->role->permissions()->sync($this->permissions);

        session()->flash('flash.banner','Rol editado con exito.');
        session()->flash('flash.bannerStyle','success');

        $this->dispatch('roleChanged');
        $this->toggleModal();
    }

    public function render()
    {
        return view('livewire.roles-and-permissions.modals.create',[
            'permissionsGrouped' => $this->getPermissions()
        ]);
    }

    private function getPermissions()
    {
        return Permission::all()
            ->map(function ($permission) {
                $model = (string) Str::of($permission->name)
                    ->before(':')
                    ->title();

                $permissionName = (string) Str::of($permission->name)
                    ->after(':')
                    ->title();

                return [
                    'model' => $model,
                    'permission_id' => $permission->id,
                    'permission_name' => $permissionName,
                    'permission_fullname' => $permission->name,
                ];
            })
            ->groupBy('model')
            ->sortBy('model');
    }
}
