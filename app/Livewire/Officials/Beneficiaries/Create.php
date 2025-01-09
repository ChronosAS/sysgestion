<?php

namespace App\Livewire\Officials\Beneficiaries;

use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $showAddBeneficiaryModal = false;

    #[On('addBeneficiaryModal')]
    public function toggleModal()
    {
        // $this->reset(['name','permissions']);

        $this->showAddBeneficiaryModal = !$this->showAddBeneficiaryModal;

    }
    public function render()
    {
        return view('livewire.officials.beneficiaries.create');
    }
}
