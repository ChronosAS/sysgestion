<?php

namespace App\Livewire\Applications;

use App\Models\Application;
use App\Models\Beneficiary;
use App\Models\Medicine;
use App\Models\Official;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public $application;

    public $code;
    public $applicant;
    public $recipient;
    public $application_date;
    public $applicant_is_recipient = true;

    public $medicines = [];
    public $recipients = [];

    public function additionalMedicine()
    {
        return [
            'medicine_id',
            'quantity'
        ];
    }

    public function addMedicine()
    {
        if (count($this->medicines) <= 9) {
            $this->medicines[] = $this->additionalMedicine();
        }
    }

    public function removeMedicine($line)
    {
        $this->resetErrorBag();

        unset($this->medicines[$line]);

        $this->medicines = array_values($this->medicines);
    }

    public function mount(Application $application)
    {
        $this->application = $application;
        $this->medicines[] = $application->medicines->mapWithKeys(function($medicine){
            return ['medicine_id' => $medicine->id,'quantity' => $medicine->pivot->quantity ];
        })->toArray();

        $this->fill([
            'applicant' => $application->applicant_id,
            'application_date' => $application->application_date,
        ]);

        $this->loadRecipients();

        if($application->recipient_type == 'App\Models\Beneficiary'){
            $this->recipient = $application->recipient_id;
            $this->applicant_is_recipient = false;
        }


    }

    public function save()
    {
        $this->validate([
            'applicant' => 'required|exists:officials,id',
            'recipient' => 'nullable|exists:beneficiaries,id',
            'application_date' => 'required|date',
            'medicines' => 'required',
            'medicines.*.medicine_id' => 'required|exists:medicines,id',
            'medicines.*.quantity' => 'required|integer|min:1|max:30',
        ], [
            'applicant.required' => 'El solicitante es obligatorio.',
            'applicant.exists' => 'El solicitante seleccionado no es válido.',
            'recipient.exists' => 'El beneficiario seleccionado no es válido.',
            'application_date.required' => 'La fecha de solicitud es obligatoria.',
            'application_date.date' => 'La fecha de solicitud no es una fecha válida.',
            'medicines.required' => 'Agregue al menos 1 medicamento.',
            'medicines.*.medicine_id.required' => 'El medicamento es obligatorio.',
            'medicines.*.medicine_id.exists' => 'El medicamento seleccionado no es válido.',
            'medicines.*.quantity.required' => 'La cantidad del medicamento es obligatoria.',
            'medicines.*.quantity.max' => 'La cantidad del medicamento no puede ser mayor a 30.',
            'medicines.*.quantity.min' => 'La cantidad del medicamento no puede ser menor a 1.',
        ]);

        $this->application->update([
            'applicant_id' => $this->applicant,
            'recipient_id' => (!$this->applicant_is_recipient) ? $this->recipient : $this->applicant,
            'recipient_type' => (!$this->applicant_is_recipient) ? 'App\Models\Beneficiary' : 'App\Models\Official',
            'application_date' => $this->application_date,
        ]);

        $medicinesArray = [];
        foreach ($this->medicines as $medicine) {
            $medicinesArray[$medicine['medicine_id']] = ['quantity' => $medicine['quantity']];
        }

        $this->application->medicines()->sync($medicinesArray);

        session()->flash('flash.banner','Solicitud actualizada con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('applications.index');
    }

    public function loadRecipients()
    {
        $this->recipients = Beneficiary::where('official_id', $this->applicant)
            ->get()
            ->mapWithKeys(function ($beneficiary) {
                return [$beneficiary->id => $beneficiary->first_names . ' ' . $beneficiary->last_names];
            })
            ->toArray();
    }

    public function updatedApplicant()
    {
        $this->loadRecipients();
    }

    public function updatedApplicantIsRecipient()
    {
        $this->loadRecipients();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.applications.edit',[
            'officials' => Official::all()->mapWithKeys(function ($beneficiary) {
                return [$beneficiary->id => $beneficiary->first_names . ' ' . $beneficiary->last_names];
            })
            ->toArray(),
            'medicinesList' => Medicine::all()->mapWithKeys(function($medicine){
                return [$medicine->id => $medicine->name.'('.$medicine->composition->label().'/'.$medicine->presentation->label().')'];
            })
        ]);
    }
}
