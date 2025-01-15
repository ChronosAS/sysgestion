<?php

namespace App\Livewire\Applications;

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

    public $file;

    public function mount(Application $application)
    {
        $this->application = $application;

        $this->loadMedicines();
    }

    public function addSubTotalToMedicines()
    {
        foreach ($this->medicines as $medicine) {
            $medicine->subTotal = ($medicine->pivot->quantity - $medicine->stock) * $medicine->price;
        }
    }

    public function upload()
    {
        $this->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ], [
            'file.required' => 'El archivo es obligatorio.',
            'file.mimes' => 'Solo se permiten archivos PDF.',
            'file.max' => 'El tamaño máximo del archivo es 2MB.',
        ]);

        $this->application->addMedia($this->file->getRealPath())
                        ->usingName($this->file->getClientOriginalName())
                        ->toMediaCollection('files');

        $this->openFileModal = !$this->openFileModal;
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
        return view('livewire.applications.show');
    }
}
