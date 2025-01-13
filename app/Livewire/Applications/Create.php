<?php

namespace App\Livewire\Applications;

use App\Models\Application;
use App\Models\Official;
use App\Models\Beneficiary;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public $code;
    public $applicant;
    public $beneficiary;
    public $request_date;
    public $delivery_date;
    public $status;

    public $recipients = [];

    #[Layout('layouts.app',['header'=>'Registrar Solicitud'])]
    public function render()
    {
        return view('livewire.applications.create',[
            'officials' => Official::all()->mapWithKeys(function ($beneficiary) {
                return [$beneficiary->id => $beneficiary->first_names . ' ' . $beneficiary->last_names];
            })
            ->toArray()
        ]);
    }

    public function updatedApplicant($id)
    {
        $this->recipients = Beneficiary::where('official_id', $id)
            ->get()
            ->mapWithKeys(function ($beneficiary) {
                return [$beneficiary->id => $beneficiary->first_names . ' ' . $beneficiary->last_names];
            })
            ->toArray();
    }

    public function save()
    {
        $this->validate([
            'code' => 'required|string|max:255',
            'applicant_id' => 'required|exists:officials,id',
            'request_date' => 'required|date',
            'delivery_date' => 'nullable|date',
            'status' => 'required|string|max:255',
        ]);

        Application::create([
            'code' => $this->code,
            'applicant_id' => $this->applicant_id,
            'request_date' => $this->request_date,
            'delivery_date' => $this->delivery_date,
            'status' => $this->status,
        ]);

        session()->flash('message', 'Application created successfully.');

        return redirect()->route('applications.index');
    }
}
