<?php

namespace App\Livewire\Applications;

use App\Enum\ApplicationStatusEnum;
use App\Models\Application;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithFileUploads;

    public Application $application;

    public $medicines;
    public $medicinesTotal;

    public $openFileModal = false;

    public $files;
    public $file;

    public function addSubTotalToMedicines()
    {
        foreach ($this->medicines as $medicine) {
            $medicine->subTotal = ($medicine->pivot->quantity - $medicine->stock) * $medicine->price;
        }
    }

    public function save()
    {
        $this->validate([
            'file' => 'required|mimes:pdf',
        ], [
            'file.required' => 'El archivo es obligatorio.',
            'file.mimes' => 'Solo se permiten archivos PDF.',
        ]);

        $this->application->addMedia($this->file->getRealPath())
                        ->usingName($this->file->getClientOriginalName())
                        ->toMediaCollection('files');

        $this->loadFiles();

        $this->openFileModal = !$this->openFileModal;
    }

    public function deleteFile($id)
    {
       $this->application->getMedia('files')->where('id',$id)->first()->delete();
       $this->loadFiles();
    }

    public function loadFiles(){
        $this->files = $this->application->getMedia('files');
    }

    public function approve(){
        if($this->medicinesTotal == 0)
            $this->application->status = ApplicationStatusEnum::Consolidated->value ;
        else
            $this->application->status = ApplicationStatusEnum::Aproved->value;


        $this->application->save();
    }

    public function reject(){
        
        $this->application->status = ApplicationStatusEnum::Denied->value;

        $this->application->save();
    }

    public function loadMedicines()
    {
        $this->medicines = $this->application->medicines;
        $this->addSubTotalToMedicines();
        $this->medicinesTotal = $this->application->medicines->sum('subTotal');
    }

    #[Layout('layouts.app',['header'=>'Solicitud'])]
    public function render()
    {
        $this->loadMedicines();
        $this->loadFiles();

        return view('livewire.applications.show');
    }
}
