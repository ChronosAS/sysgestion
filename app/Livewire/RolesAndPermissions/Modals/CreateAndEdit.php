<?php

namespace App\Livewire\RolesAndPermissions\Modals;

use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateAndEdit extends Component
{
    public $role = null;
    #[Validate('required',message: 'Porfavor ingrese un nombre.')]
    #[Validate('unique:roles',message: 'Ya existe un rol con este nombre.')]
    #[Validate('string',message: 'Formato de nombre invalido.')]
    #[Validate('max:50',message: 'Nombre exede el tamaño maximo de 50 caracteres.')]
    public $name;
    public $permissions = [];
    public $showRoleModal = false;

    #[On('roleModal')]
    public function toggleModal($role = null)
    {

        $this->reset(['role','name','permissions']);

        if($role){
            $this->role = Role::where('guard_name','web')->where('id',$role)->first();
            $this->name = $this->role->name;
            $this->permissions = $this->role->permissions->pluck('name');
        }

        $this->showRoleModal = !$this->showRoleModal;

    }

    public function save()
    {
        $this->validate();

        if($this->role){
            $this->role->update(['name'=>$this->name]);
            $this->role->permissions()->sync($this->permissions);
        }else{
            tap(Role::create([
                'name'=> $this->name,
                'guard_name' => 'web'
            ]),function($role){
                $role->givePermissionTo($this->permissions);
            });
        }

        session()->flash('flash.banner','Rol creado con exito.');
        session()->flash('flash.bannerStyle','success');

        $this->dispatch('roleChanged');
        $this->toggleModal();
    }

    public function render()
    {
        return view('livewire.roles-and-permissions.modals.create-and-edit',[
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
