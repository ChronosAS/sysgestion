<?php

namespace App\Livewire\Medicines;

use App\Concerns\LivewireCustomPagination;
use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use App\Models\Medicine;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public $composition;
    public $presentation;
    public $available = 1;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    #[On('medicineCreated')]
    #[On('medicineUpdated')]
    public function loadMedicines()
    {
        return Medicine::query()
            ->select([
                'id',
                'name',
                'composition',
                'presentation',
                'active_component',
                'laboratory',
                'price',
                'stock',
                'expiration_date',
                'entry_date',
            ])
            ->when($this->available == 0, function ($query) {
                return $query->where('stock','==', 0);
            })
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

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.medicines.index',[
            'medicines' => $this->loadMedicines(),
            'presentations' => PresentationEnum::options(),
            'compositions' => CompositionEnum::options(),
            'availabilityOptions' => [
                '1' => 'Disponibles',
                '0' => 'No disponibles'
            ]
        ]);
    }
}
