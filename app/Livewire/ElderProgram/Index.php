<?php

namespace App\Livewire\ElderProgram;

use App\Concerns\LivewireCustomPagination;
use App\Models\ElderProgramMember;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    use LivewireCustomPagination;

    public $status;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public function loadElders()
    {
        return ElderProgramMember::query()
            ->select([
                'id',
                'status',
                'elder_id',
                'created_at',
            ])
            ->withAggregate('elder','document')
            ->withAggregate('elder','first_names')
            ->withAggregate('elder','last_names')
            ->withAggregate('elder','email')
            ->withAggregate('elder','phone_number')
            ->when($this->status, function ($query) {
                return $query->where('status',$this->status);
            })
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.elder-program.index',[
            'elders' => $this->loadElders()
        ]);
    }
}
