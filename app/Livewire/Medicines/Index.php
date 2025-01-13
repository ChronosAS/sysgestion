<?php

namespace App\Livewire\Medicines;

use App\Concerns\LivewireCustomPagination;
use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use App\Models\Medicine;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $composition;
    public $presentation;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public function loadMedicines()
    {
        return Medicine::query()
            ->select([
                'id',
                'name',
                'composition',
                'active_component',
                'presentation',
                'laboratory',
                'price',
                'stock',
                'expiration_date',
                'entry_date',
            ])
            ->when($this->composition, function ($query) {
                return $query->where('composition', $this->composition);
            })
            ->when($this->presentation, function ($query) {
                return $query->where('presentation', $this->presentation);
            })
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    #[Layout('layouts.app',['header'=>'Medicamentos'])]
    public function render()
    {
        return view('livewire.medicines.index',[
            'medicines' => $this->loadMedicines(),
            'presentations' => PresentationEnum::options(),
            'compositions' => CompositionEnum::options()
        ]);
    }
}
