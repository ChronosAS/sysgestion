<?php

namespace App\Livewire\Users;

use App\Concerns\LivewireCustomPagination;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $sortField = null;
    public $is_active = null;

    protected $queryString = [
        'sortField' => ['except'=>''],
        'sortAsc' => ['except'=>false],
        'perPage' => ['except' => '10']
    ];

    private function loadUsers(){
        return User::query()
            ->select([
                'id',
                'document',
                'first_names',
                'last_names',
                'email',
                'status'
            ])
            ->when(strlen($this->is_active)>0,function($query){
                return $query->where('status',$this->is_active);
            })
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    #[Layout('layouts.app',['header'=>'Usuarios'])]
    public function render()
    {
        return view('livewire.users.index',[
            'users' => $this->loadUsers(),
            'status' => [1 => 'Activo',0 => 'Inactivo']
        ]);
    }
}
