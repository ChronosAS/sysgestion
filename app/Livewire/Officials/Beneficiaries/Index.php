<?php

namespace App\Livewire\Officials\Beneficiaries;

use App\Concerns\LivewireCustomPagination;
use App\Models\Beneficiary;
use App\Models\Official;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    use LivewireCustomPagination;

    public Official $official;

    public $sortField = null;
    public $is_active = null;
    public $gender;

    protected $queryString = [
        'sortField' => ['except'=>''],
        'sortAsc' => ['except'=>false],
        'perPage' => ['except' => '10']
    ];

    private function loadBeneficiaries(){
        return Beneficiary::query()
            ->select([
                'id',
                'document',
                'first_names',
                'last_names',
                'phone_number',
                'email',
                'gender',
                'relationship',
                'address',
            ])
            ->where('official_id',$this->official->id)
            ->when($this->gender,function($query){
                return $query->where('gender',$this->gender);
            })
            ->search($this->search)
            ->orderBy($this->sortField ?? 'id', $this->sortAsc ? 'ASC' : 'DESC')
            ->paginate($this->perPage);
    }

    #[On('beneficiaryAdded','beneficiaryUpdated')]
    public function render()
    {
        return view('livewire.officials.beneficiaries.index',[
            'beneficiaries' => $this->loadBeneficiaries()
        ]);
    }
}
