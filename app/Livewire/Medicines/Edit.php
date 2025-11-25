<?php

namespace App\Livewire\Medicines;

use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use App\Models\Medicine;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class Edit extends Component
{

    public Medicine $medicine;

    public $name;
    public $active_component;
    public $composition;
    public $presentation;
    public $laboratory;
    public $stock;
    public $price;
    public $expiration_date;
    public $entry_date;

    public $showEditMedicineModal = false;

    #[On('editMedicine')]
    public function loadMedicine(Medicine $medicine)
    {
        $this->reset();

        $this->medicine = $medicine;
        $this->fill($medicine);
        $this->toggleModal();
    }

    public function toggleModal()
    {
       $this->showEditMedicineModal = !$this->showEditMedicineModal;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'presentation' => ['required','string',Rule::enum(PresentationEnum::class)],
            'composition' => ['required','string',Rule::enum(CompositionEnum::class)],
            'active_component' => 'required|string|max:255',
            'laboratory' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'price' => ['required', 'numeric', 'min:0', 'regex:/^\d{1,4}(\.\d{1,2})?$/'],
            'expiration_date' => 'required|date',
            'entry_date' => 'required|date',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no debe exceder los 255 caracteres.',
            'presentation.required' => 'La presentación es obligatoria.',
            'presentation.string' => 'La presentación debe ser una cadena de texto.',
            'presentation.max' => 'La presentación no debe exceder los 255 caracteres.',
            'composition.required' => 'La composición es obligatoria.',
            'composition.string' => 'La composición debe ser una cadena de texto.',
            'composition.max' => 'La composición no debe exceder los 255 caracteres.',
            'active_component.required' => 'El componente activo es obligatorio.',
            'active_component.string' => 'El componente activo debe ser una cadena de texto.',
            'active_component.max' => 'El componente activo no debe exceder los 255 caracteres.',
            'laboratory.required' => 'El laboratorio es obligatorio.',
            'laboratory.string' => 'El laboratorio debe ser una cadena de texto.',
            'laboratory.max' => 'El laboratorio no debe exceder los 255 caracteres.',
            'stock.required' => 'El stock es obligatorio.',
            'stock.integer' => 'El stock debe ser un número entero.',
            'stock.min' => 'El stock no puede ser negativo.',
            'price.required' => 'El precio es obligatorio.',
            'price.numeric' => 'El precio debe ser un número.',
            'price.min' => 'El precio no puede ser negativo.',
            'price.regex' => 'El precio debe tener hasta 4 dígitos y 2 decimales.',
            'expiration_date.required' => 'La fecha de expiración es obligatoria.',
            'expiration_date.date' => 'La fecha de expiración debe ser una fecha válida.',
            'entry_date.required' => 'La fecha de ingreso es obligatoria.',
            'entry_date.date' => 'La fecha de ingreso debe ser una fecha válida.',
        ]);

        $this->medicine->update([
            'name' => $this->name,
            'presentation' => $this->presentation,
            'composition' => $this->composition,
            'active_component' => $this->active_component,
            'laboratory' => $this->laboratory,
            'stock' => $this->stock,
            'price' => $this->price,
            'expiration_date' => $this->expiration_date,
            'entry_date' => $this->entry_date,
        ]);

        $this->dispatch('medicineUpdated');
        session()->flash('flash.banner','Medicina registrada con exito.');
        session()->flash('flash.bannerStyle','success');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.medicines.edit', [
            'presentations' => PresentationEnum::options(),
            'compositions' => CompositionEnum::options(),
        ]);
    }
}
