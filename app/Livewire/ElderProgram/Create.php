<?php

namespace App\Livewire\ElderProgram;

use App\Enum\Citizens\CivilStatusEnum;
use App\Enum\GenderEnum;
use App\Models\ElderProgramApplication;
use App\Models\Estado;
use App\Models\Municipio;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

#[Layout('layouts.app')]
class Create extends Component
{
    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $civil_status;
    public $city_of_birth;
    public $education_level;
    public $email;
    public $phone_number;
    public $phone_number_2;
    public $address;
    public $medical_aspect;
    public $estado;
    public $municipio;
    public $parroquia;
    public $gender;

    public $municipios = [];
    public $parroquias = [];
    public $familyMembers = [];

    public function mount()
    {
        $this->familyMembers[] = $this->additionalFamily();
    }

    public function additionalFamily()
    {
        return [
            'document',
            'first_names',
            'last_names',
            'age',
            'relation',
        ];
    }

    public function addFamilyMember()
    {
        if (count($this->familyMembers) <= 9) {
            $this->familyMembers[] = $this->additionalFamily();
        }
    }

    public function removeFamilyMember($line)
    {
        $this->resetErrorBag();

        unset($this->familyMembers[$line]);

        $this->familyMembers = array_values($this->familyMembers);
    }

    public function updatedEstado()
    {
        $this->municipios = Estado::find($this->estado)->municipios->pluck('municipio','id_municipio');

        $this->municipio = null;
        $this->parroquia = null;
        $this->parroquias = [];

    }

    public function updatedMunicipio()
    {

        if($this->municipio != '#')
            $this->parroquias = Municipio::find($this->municipio)->parroquias->pluck('parroquia','id_parroquia');
        else
            $this->parroquias = [];

        $this->parroquia = null;
    }

    public function save()
    {

        $this->validate([
            'document' => 'required|unique:citizens,document',
            'first_names' => 'required|string|max:255',
            'last_names' => 'required|string|max:255',
            'dob' => 'required|date',
            'city_of_birth' => ['required','string'],
            'email' => 'email|unique:citizens,email',
            'phone_number' => 'required|string|max:20',
            'phone_number_2' => 'string|max:20',
            'address' => 'required|string|max:255',
            'medical_aspect' => 'required|string|max:255',
            'gender' => ['required', Rule::enum(GenderEnum::class)],
            'civil_status' => ['required', Rule::enum(CivilStatusEnum::class)],
            'estado' => 'required',
            'municipio' => 'required',
            'parroquia' => 'required',

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
            'city_of_birth.required' => 'La ciudad de nacimiento es obligatoria.',
            'city_of_birth.string' => 'La ciudad de nacimiento debe ser una cadena de texto.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'phone_number.required' => 'El número de teléfono es obligatorio.',
            'phone_number.string' => 'El número de teléfono debe ser una cadena de texto.',
            'phone_number.max' => 'El número de teléfono no debe exceder los 20 caracteres.',
            'phone_number_2.string' => 'El segundo número de teléfono debe ser una cadena de texto.',
            'phone_number_2.max' => 'El segundo número de teléfono no debe exceder los 20 caracteres.',
            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser una cadena de texto.',
            'address.max' => 'La dirección no debe exceder los 255 caracteres.',
            'address.required' => 'El aspecto medico es obligatoria.',
            'address.string' => 'El aspecto medico debe ser una cadena de texto.',
            'address.max' => 'El aspecto medico no debe exceder los 255 caracteres.',
            'gender.required' => 'El género es obligatorio.',
            'civil_status.required' => 'El estado civil es obligatorio.',
            'estado.required' => 'El estado es obligatorio.',
            'municipio.required' => 'El municipio es obligatorio.',
            'parroquia.required' => 'La parroquia es obligatoria.',
        ]);

        tap(ElderProgramApplication::create([
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'gender' => $this->gender,
        ]),function($application){
            $application->familyMembers()->createMany($this->familyMembers);
        });

        session()->flash('flash.banner','Solicitud creada con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('elder-program.index');
    }

    public function render()
    {
        return view('livewire.elder-program.create', [
            'genders' => GenderEnum::options(),
            'civil_statuses' => CivilStatusEnum::options(),
            'states' => Estado::all()->map(function($estado) {
                return [
                    'id' => $estado->id_estado,
                    'name' => $estado->estado,
                ];
            }),
        ]);
    }
}
