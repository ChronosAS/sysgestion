<?php

namespace App\Livewire\ElderProgram;

use App\Models\ElderProgramApplication;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class Show extends Component
{
    use WithFileUploads;

    public ElderProgramApplication $elderProgramApplication;
    public $citizen;

    public $image;

    public function mount()
    {
        $this->citizen = $this->elderProgramApplication->elder;
    }

    public function loadImage()
    {
        $this->validate([
            'image' => 'required|image|max:700|dimensions:width=320,height=260',
        ],[
            'image.required' => 'Agregue una imagen.',
            'image.image' => 'El archivo debe ser una imagen.',
            'image.max' => 'La imagen no debe ser mayor a 1024 kilobytes.',
            'image.dimensions' => 'La imagen debe tener dimensiones de 3.2x2.6 cm.',
        ]);

        $this->citizen->clearMediaCollection('profile');

        $this->citizen->addMedia($this->image->getRealPath())
            ->usingName($this->image->getClientOriginalName())
            ->toMediaCollection('profile');
    }

    public function render()
    {
        return view('livewire.elder-program.show');
    }
}
