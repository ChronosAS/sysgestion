<?php

namespace App\Livewire\RolesAndPermissions\Modals;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Edit extends Component
{
    public $role = null;
    public $name;
    public $permissions;
    public $showEditRoleModal = false;

    #[On('editRoleModal')]
    public function toggleModal($role = null)
    {
        $this->reset(['role','name', 'permissions']);

        if ($role) {
            $this->role = Role::where('id', $role)->first();
            $this->name = $this->role->name;
            $this->permissions = $this->role->permissions->pluck('id')->toArray();
        }

        $this->showEditRoleModal = !$this->showEditRoleModal;
    }

    public function update()
    {
        $this->validate(
            [
                'name' => 'required|string|max:255|unique:roles,name,' . $this->role->id,
            ],
            [
                'required' => 'Porfavor ingrese un nombre.',
                'string' => 'Formato de nombre invalido.',
                'max' => 'Nombre exede el tamaño maximo de 50 caracteres.',
                'unique' => 'Ya existe un rol con este nombre.'
            ]
        );

        $this->role->update(['name'=>$this->name]);
        $this->role->permissions()->sync($this->permissions);

        session()->flash('flash.banner','Rol creado con exito.');
        session()->flash('flash.bannerStyle','success');

        $this->dispatch('roleChanged');
        $this->toggleModal();
    }

    public function render()
    {
        return view('livewire.roles-and-permissions.modals.edit',[
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
