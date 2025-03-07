<?php

namespace App\Livewire\ElderProgram\Pension;

use App\Models\ElderProgramMember;
use App\Models\PensionReport;
use Livewire\Attributes\On;
use Livewire\Component;

class GenerateModal extends Component
{
    public $amount;
    public $total_elders;
    public $total;

    public $isGenerated = false;
    public $generateModalOpen = false;

    public function generate()
    {
        $this->validate([
            'amount' => ['required', 'numeric', 'min:0', 'regex:/^\d{1,10}(\.\d{1,2})?$/'],
        ],[
            'amount.required' => 'El monto de pago es obligatorio.',
            'amount.numeric' => 'El monto de pago debe ser un número.',
            'amount.min' => 'El monto de pago no puede ser negativo.',
            'amount.regex' => 'El monto de pago debe tener hasta 10 dígitos y 2 decimales.',
        ]);
        $this->reset('total','total_elders');
        $this->total_elders = ElderProgramMember::count();

        $this->total = $this->total_elders * $this->amount;

        $this->isGenerated = true;
    }

    public function save()
    {
        tap(PensionReport::create([
            'total_elders' => $this->total_elders,
            'amount' => $this->amount,
            'total' => $this->total,
        ]), function($report) {
            $report->elders()->attach(ElderProgramMember::all());
        });

        $this->toggleModal();
        $this->reset('total','total_elders','amount','isGenerated');

        $this->dispatch('reportGenerated');
    }

    #[On('showGenerateModal')]
    public function toggleModal()
    {
        $this->reset('total','total_elders','amount','isGenerated');
        $this->generateModalOpen = !$this->generateModalOpen;
    }

    public function render()
    {
        return view('livewire.elder-program.pension.generate-modal');
    }
}
