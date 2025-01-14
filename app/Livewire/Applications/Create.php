<?php

namespace App\Livewire\Applications;

use App\Enum\ApplicationStatusEnum;
use App\Models\Application;
use App\Models\Beneficiary;
use App\Models\Medicine;
use App\Models\Official;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $code;
    public $applicant;
    public $recipient;
    public $beneficiary;
    public $request_date;

    public $medicines = [];
    public $recipients = [];
    public $files = [];

    public function mount()
    {
        $this->medicines[] = $this->additionalMedicine();
    }

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


    #[Layout('layouts.app',['header'=>'Registrar Solicitud'])]
    public function render()
    {
        return view('livewire.applications.create',[
            'officials' => Official::all()->mapWithKeys(function ($beneficiary) {
                return [$beneficiary->id => $beneficiary->first_names . ' ' . $beneficiary->last_names];
            })
            ->toArray(),
            'medicinesList' => Medicine::all()->mapWithKeys(function($medicine){
                return [$medicine->id => $medicine->name.'('.$medicine->composition->label().'/'.$medicine->presentation->label().')'];
            })
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

    // public function checkMedicineAvailability()
    // {
    //     $count = 0;

    //     foreach($this->medicines as $medicine)
    //     {
    //         if((Medicine::find($medicine['medicine_id']))->stock >= $medicine['quantity'])
    //             $count++;
    //     }

    //     return $count == count($this->medicines);
    // }

    public function save()
    {

        $this->validate([
            'applicant' => 'required|exists:officials,id',
            'recipient' => 'nullable|exists:beneficiaries,id',
            'request_date' => 'required|date',
            'files' => 'required|array',
            'files.*' => 'required|file|mimes:pdf',
            'medicines' => 'required',
            'medicines.*.medicine_id' => 'required|exists:medicines,id',
            'medicines.*.quantity' => 'required|integer|min:1|max:30',
        ], [
            'applicant.required' => 'El solicitante es obligatorio.',
            'applicant.exists' => 'El solicitante seleccionado no es válido.',
            'recipient.exists' => 'El beneficiario seleccionado no es válido.',
            'request_date.required' => 'La fecha de solicitud es obligatoria.',
            'request_date.date' => 'La fecha de solicitud no es una fecha válida.',
            'files.required' => 'Agregue al menos 1 archivo.',
            'files.*.file' => 'Cada archivo debe ser un archivo válido.',
            'files.*.mimes' => 'Cada archivo debe ser un archivo de tipo: pdf.',
            'medicines.required' => 'Agregue al menos 1 medicamento.',
            'medicines.*.medicine_id.required' => 'El medicamento es obligatorio.',
            'medicines.*.medicine_id.exists' => 'El medicamento seleccionado no es válido.',
            'medicines.*.quantity.required' => 'La cantidad del medicamento es obligatoria.',
            'medicines.*.quantity.max' => 'La cantidad del medicamento no puede ser mayor a 30.',
            'medicines.*.quantity.min' => 'La cantidad del medicamento no puede ser menor a 1.',
        ]);

        tap(Application::create([
            'applicant_id' => $this->applicant,
            'recipient_id' => ($this->recipient != null) ? $this->recipient : $this->applicant,
            'recipient_type' => ($this->recipient != null) ? 'App\Models\Beneficiary' : 'App\Models\Official',
            'application_date' => $this->request_date,
        ]),function($application){
            foreach ($this->medicines as $medicine) {
                $application->medicines()->attach($medicine['medicine_id'],[
                    'quantity' => $medicine['quantity'],
                ]);
            }
            foreach($this->files as $file){
                $application->addMedia($file->getRealPath())
                        ->usingName($file->getClientOriginalName())
                        ->toMediaCollection('files');
            }
        });

        session()->flash('flash.banner','Solicitud registrada con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('applications.index');
    }
}
