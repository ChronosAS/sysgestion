<?php

namespace App\Livewire\Applications;

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
    public $beneficiary;
    public $request_date;
    public $delivery_date;

    public $medicines = [];
    public $recipients = [];

    public function mount()
    {
        $this->medicines[] = $this->additionalMedicine();
    }

    public function additionalMedicine()
    {
        return [
            'id',
            'amount'
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

    public function checkMedicineAvailability()
    {

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

        tap(Application::create([
            'code' => $this->code,
            'applicant_id' => $this->applicant_id,
            'request_date' => $this->request_date,
        ]),function($application){
            foreach ($this->medicines as $medicine) {
                $application->medicines()->create([
                    'medicine_id' => $medicine['medicine'],
                    'amount' => $medicine['amount'],
                ]);
            }
        });

        session()->flash('flash.banner','Solicitud registrada con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('applications.index');
    }
}
