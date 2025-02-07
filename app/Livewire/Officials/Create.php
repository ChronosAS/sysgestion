<?php

namespace App\Livewire\Officials;

use App\Enum\GenderEnum;
use App\Models\Official;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $phone_number;
    public $address;
    public $gender;
    public $beneficiaries = [];

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.officials.create',[
            'genders' => GenderEnum::options(),
        ]);
    }

    #[On('beneficiaryAdded','beneficiaryUpdated')]
    public function refreshBeneficiaries($beneficiaries)
    {
        $this->beneficiaries = $beneficiaries;
    }

    public function removeBeneficiary($line)
    {
        $this->resetErrorBag();

        unset($this->beneficiaries[$line]);

        $this->beneficiaries = array_values($this->beneficiaries);
    }

    public function save()
    {
        $this->validate([
            'document' => 'required|unique:officials,document',
            'first_names' => 'required|string|max:255',
            'last_names' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:officials,email',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'gender' => ['required', Rule::enum(GenderEnum::class)],
        ], [
            'document.required' => 'El documento es obligatorio.',
            'document.unique' => 'El documento ya está registrado.',
            'first_names.required' => 'Los nombres son obligatorios.',
            'first_names.string' => 'Los nombres deben ser una cadena de texto.',
            'first_names.max' => 'Los nombres no deben exceder los 255 caracteres.',
            'last_names.required' => 'Los apellidos son obligatorios.',
            'last_names.string' => 'Los apellidos deben ser una cadena de texto.',
            'last_names.max' => 'Los apellidos no deben exceder los 255 caracteres.',
            'dob.required' => 'La fecha de nacimiento es obligatoria.',
            'dob.date' => 'La fecha de nacimiento no es válida.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'phone_number.required' => 'El número de teléfono es obligatorio.',
            'phone_number.string' => 'El número de teléfono debe ser una cadena de texto.',
            'phone_number.max' => 'El número de teléfono no debe exceder los 20 caracteres.',
            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser una cadena de texto.',
            'address.max' => 'La dirección no debe exceder los 255 caracteres.',
            'gender.required' => 'El género es obligatorio.',
        ]);

        tap(Official::create([
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'gender' => $this->gender,
        ]),function($official){
            $official->beneficiaries()->createMany($this->beneficiaries);
        });

        session()->flash('flash.banner','Funcionario creado con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('officials.index');
    }
}
