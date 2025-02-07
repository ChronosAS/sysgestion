<?php

namespace App\Livewire\Officials;

use App\Concerns\LivewireCustomPagination;
use App\Models\Official;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $sortField = null;
    public $is_active = null;
    public $gender;

    protected $queryString = [
        'sortField' => ['except'=>''],
        'sortAsc' => ['except'=>false],
        'perPage' => ['except' => '10']
    ];

    private function loadOfficials(){
        return Official::query()
            ->select([
                'id',
                'document',
                'first_names',
                'last_names',
                'phone_number',
                'gender',
                'email'
            ])
            ->when($this->gender,function($query){
                return $query->where('gender',$this->gender);
            })
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.officials.index',[
            'officials' => $this->loadOfficials()
        ]);
    }
}
