<?php

namespace App\Livewire\ElderProgram\Pension;

use App\Concerns\LivewireCustomPagination;
use App\Models\PensionReport;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    use LivewireCustomPagination;

    public $sortField = null;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public function loadReports()
    {
        return PensionReport::query()
            ->select([
                'code',
                'total_elders',
                'amount',
                'total',
                'created_at',
            ])
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    #[On('reportGenerated')]
    public function render()
    {
        return view('livewire.elder-program.pension.index',[
            'reports' => $this->loadReports()
        ]);
    }
}
