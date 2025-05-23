<?php

namespace App\Livewire\Medicines\Donations;

use App\Concerns\LivewireCustomPagination;
use App\Models\Donation;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Index extends Component
{
    use LivewireCustomPagination;

    public $status;
    public $sortField;
    public $hasCard;

    protected $queryString = [
        'sortField' => ['except' => null],
        'sortAsc' => ['except' => true],
        'search' => ['except' => ''],
        'perPage' => ['except' => '10']
    ];

    public function loadDonations()
    {
        return Donation::query()
            ->select([
                'id',
                'code',
                'donor_document',
                'donor_name',
                'donor_email',
                'donor_dob',
                'donor_phone_number',
                'donor_address',
                'created_at',
            ])
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.medicines.donations.index',[
            'donations' => $this->loadDonations()
        ]);
    }
}
