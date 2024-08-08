<?php

namespace App\Livewire\RolesAndPermissions;


use App\Livewire\RolesAndPermissions\Concerns\RolesAndPermissionsCustomPagination;
use Livewire\Component;
use App\Models\Role;

class Index extends Component
{
    use RolesAndPermissionsCustomPagination;

    public $roleSortField = null;

    protected $queryString = [
        'roleSortField' => ['except'=>''],
        'roleSortAsc' => ['except'=>false],
        'rolePerPage' => ['except' => '10']
    ];

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

    public function render()
    {
        return view('livewire.roles-and-permissions.index',[
            'roles' => $this->loadRoles()
        ]);
    }
}
