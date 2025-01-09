<?php

namespace App\Livewire\Officials\Beneficiaries;

use App\Enum\GenderEnum;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $showAddBeneficiaryModal = false;

    public $beneficiaries = [];

    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $phone_number;
    public $address;
    public $gender;
    public $relationship;


    public function mount($beneficiaries)
    {
        $this->beneficiaries = $beneficiaries;
    }

    public function add()
    {
        $this->validate([
            'document' => 'required|string|max:255',
            'first_names' => 'required|string|max:255',
            'last_names' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'gender' => ['required', Rule::enum(GenderEnum::class)],
            'relationship' => 'required|string|max:255',
        ], [
            'document.required' => 'El documento es obligatorio.',
            'document.string' => 'El documento debe ser una cadena de texto.',
            'document.max' => 'El documento no puede tener más de 255 caracteres.',
            'first_names.required' => 'Los nombres son obligatorios.',
            'first_names.string' => 'Los nombres deben ser una cadena de texto.',
            'first_names.max' => 'Los nombres no pueden tener más de 255 caracteres.',
            'last_names.required' => 'Los apellidos son obligatorios.',
            'last_names.string' => 'Los apellidos deben ser una cadena de texto.',
            'last_names.max' => 'Los apellidos no pueden tener más de 255 caracteres.',
            'dob.required' => 'La fecha de nacimiento es obligatoria.',
            'dob.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'email.max' => 'El correo electrónico no puede tener más de 255 caracteres.',
            'phone_number.required' => 'El número de teléfono es obligatorio.',
            'phone_number.string' => 'El número de teléfono debe ser una cadena de texto.',
            'phone_number.max' => 'El número de teléfono no puede tener más de 20 caracteres.',
            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser una cadena de texto.',
            'address.max' => 'La dirección no puede tener más de 255 caracteres.',
            'gender.required' => 'El género es obligatorio.',
            'relationship.required' => 'La relación es obligatoria.',
            'relationship.string' => 'La relación debe ser una cadena de texto.',
            'relationship.max' => 'La relación no puede tener más de 255 caracteres.',
        ]);

        $this->beneficiaries[] = [
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'gender' => $this->gender,
            'relationship' => $this->relationship,
        ];

        $this->dispatch('beneficiaryAdded', $this->beneficiaries);

        // Reset the form fields after adding the beneficiary
        $this->reset([
            'document',
            'first_names',
            'last_names',
            'dob',
            'email',
            'phone_number',
            'address',
            'gender',
            'relationship'
        ]);

        $this->toggleModal();
    }

    #[On('addBeneficiaryModal')]
    public function toggleModal()
    {
        $this->showAddBeneficiaryModal = !$this->showAddBeneficiaryModal;
    }
    public function render()
    {
        return view('livewire.officials.beneficiaries.create',[
            'genders'=> GenderEnum::options(),
        ]);
    }
}
