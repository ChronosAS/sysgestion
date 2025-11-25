<?php

namespace App\Livewire\RolesAndPermissions;


use App\Livewire\RolesAndPermissions\Concerns\RolesAndPermissionsCustomPagination;
use App\Models\Role;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    use RolesAndPermissionsCustomPagination;

    public $roleSortField = null;

    protected $queryString = [
        'roleSortField' => ['except'=>''],
        'roleSortAsc' => ['except'=>false],
        'rolePerPage' => ['except' => '10']
    ];

    public function deleteRole(Role $role){
        $role->delete();
    }

    private function loadRoles(){
        return Role::query()
            ->select([
                'id',
                'name',
            ])
            ->search($this->roleSearch)
            ->orderBy($this->roleSortField ?? 'id', $this->roleSortAsc ? 'ASC' : 'DESC')
            ->paginate($this->rolePerPage);
    }

    #[On('roleChanged')]
    public function render()
    {
        return view('livewire.roles-and-permissions.index',[
            'roles' => $this->loadRoles()
        ]);
    }
}
