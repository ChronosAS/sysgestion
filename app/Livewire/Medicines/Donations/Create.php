<?php

namespace App\Livewire\Medicines\Donations;

use App\Enum\Citizens\CivilStatusEnum;
use App\Enum\GenderEnum;
use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use App\Models\Citizen;
use App\Models\Donation;
use App\Models\Estado;
use App\Models\Medicine;
use App\Models\Municipio;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Create extends Component
{

    public Citizen $citizen;

    public $document;
    public $first_names;
    public $last_names;
    public $gender;
    public $email;
    public $phone_number;
    public $phone_number_2;
    public $grade;
    public $civil_status;
    public $education_level;
    public $estado;
    public $municipio;
    public $parroquia;
    public $dob;
    public $address;
    public $observation;

    public $name;
    public $presentation;
    public $active_component;
    public $composition_quantity;
    public $composition = 'mg';
    public $laboratory;
    public $stock;
    public $entry_date;
    public $expiration_date;

    public $all_medicines = [];
    public $donation_medicines = [];
    public $medicine;

    public $municipios = [];
    public $parroquias = [];
    public $genders = [];
    public $states = [];
    public $presentations = [];
    public $compositions = [];

    public $citizenExists = false;
    public $newMed = false;


    public function mount()
    {
        $this->genders = GenderEnum::options();
        $this->states = Estado::all()->map(function($estado) {
            return [
                'id' => $estado->id_estado,
                'name' => $estado->estado,
            ];
        })->toArray();

        $all_medicines = Medicine::all()->map(function($medicine) {
            return [
                'id' => $medicine->id,
                'name' => $medicine->name.'('.$medicine->composition_quantity.$medicine->composition->name.')',
                'laboratory' => $medicine->laboratory,
            ];
        })->toArray();

        $this->all_medicines = $all_medicines;

        $this->presentations = PresentationEnum::options();

        $this->compositions = CompositionEnum::options();
    }

    public function addMedicine()
    {
        if(!$this->newMed){

            $this->validate([
                'name' => 'required',
                'presentation' => 'required',
                'active_component' => 'required',
                'composition_quantity' => 'required|numeric',
                'composition' => 'required',
                'laboratory' => 'required',
                'stock' => 'required|numeric',
                'entry_date' => 'required|date',
                'expiration_date' => 'required|date|after:entry_date',
            ],[
                'name.required' => 'Ingrese nombre del medicamento',
                'presentation.required' => 'Seleccione presentación',
                'active_component.required' => 'Ingrese componente activo',
                'composition_quantity.required' => 'Ingrese cantidad de composición',
                'composition.required' => 'Seleccione composición',
                'laboratory.required' => 'Ingrese laboratorio',
                'stock.required' => 'Ingrese stock',
                'entry_date.required' => 'Ingrese fecha de entrada',
                'expiration_date.required' => 'Ingrese fecha de vencimiento',
                'expiration_date.after' => 'La fecha de vencimiento debe ser posterior a la fecha de entrada'
            ]);

        }else{

            $this->fill(Medicine::find($this->medicine));
        }


        $this->donation_medicines[] = [
            'name' => $this->name,
            'presentation' => PresentationEnum::from($this->presentation),
            'active_component' => $this->active_component,
            'composition_quantity' => $this->composition_quantity,
            'composition' => $this->composition,
            'laboratory' => $this->laboratory,
            'stock' => $this->stock,
            'entry_date' => $this->entry_date,
            'expiration_date' => $this->expiration_date,
        ];
    }

    public function removeMedicine($index)
    {
        unset($this->donation_medicines[$index]);
        $this->donation_medicines = array_values($this->donation_medicines);
    }

    public function save()
    {
        $this->validate([
            'document' => 'nullable|integer|min:7',
            'first_names' => 'nullable|string|max:255',
            'last_names' => 'nullable|string|max:255',
            'dob' => ['nullable', 'date'],
            'email' => 'nullable|email|unique:citizens,email',
            'phone_number' => 'nullable|string|max:20',
            'education_level' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'gender' => ['nullable', Rule::enum(GenderEnum::class)],
            'civil_status' => ['nullable', Rule::enum(CivilStatusEnum::class)],
            'donation_medicines' => 'required|array|min:1',
        ],[
            'document.integer' => 'El número de documento debe ser un número.',
            'document.min' => 'El número de documento debe tener al menos 7 dígitos.',
            'first_names.string' => 'Los nombres deben ser texto.',
            'first_names.max' => 'Los nombres no pueden exceder 255 caracteres.',
            'last_names.string' => 'Los apellidos deben ser texto.',
            'last_names.max' => 'Los apellidos no pueden exceder 255 caracteres.',
            'dob.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'email.unique' => 'El correo electrónico ya está registrado.',
            'phone_number.string' => 'El número de teléfono debe ser texto.',
            'phone_number.max' => 'El número de teléfono no puede exceder 20 caracteres.',
            'education_level.string' => 'El nivel educativo debe ser texto.',
            'education_level.max' => 'El nivel educativo no puede exceder 255 caracteres.',
            'address.string' => 'La dirección debe ser texto.',
            'address.max' => 'La dirección no puede exceder 255 caracteres.',
            'gender.enum' => 'El género seleccionado no es válido.',
            'civil_status.enum' => 'El estado civil seleccionado no es válido.',
            'donation_medicines.required' => 'Debe agregar al menos un medicamento a la donación.',
            'donation_medicines.array' => 'Los medicamentos deben estar en formato de lista.',
            'donation_medicines.min' => 'Debe agregar al menos un medicamento a la donación.',
        ]);

        tap(Donation::create([
            'donor_document' => $this->document,
            'donor_name' => $this->first_names.' '.$this->last_names,
            'donor_email' => $this->email,
            'donor_phone_number' => $this->phone_number,
            'donor_civil_status' => $this->civil_status,
            'donor_dob' => $this->dob,
            'donor_address' => $this->address,
            'estado_id' => $this->estado,
            'municipio_id' => $this->municipio,
            'parroquia_id' => $this->parroquia,
            'observations' => $this->observation,
        ]), function ($donation) {
                foreach ($this->donation_medicines as $medicine) {
                    $existingMedicine = Medicine::where([
                        'name' => $medicine['name'],
                        'presentation' => $medicine['presentation'],
                        'active_component' => $medicine['active_component'],
                        'composition_quantity' => $medicine['composition_quantity'],
                        'composition' => $medicine['composition'],
                        'laboratory' => $medicine['laboratory'],
                        'entry_date' => $medicine['entry_date'],
                        'expiration_date' => $medicine['expiration_date'],
                    ])->first();

                    if ($existingMedicine) {
                        $existingMedicine->stock += $medicine['stock'];
                        $existingMedicine->save();
                        continue;
                    }

                    $donation->medicines()->create([
                        'name' => $medicine['name'],
                        'presentation' => $medicine['presentation'],
                        'active_component' => $medicine['active_component'],
                        'composition_quantity' => $medicine['composition_quantity'],
                        'composition' => $medicine['composition'],
                        'laboratory' => $medicine['laboratory'],
                        'stock' => $medicine['stock'],
                        'entry_date' => $medicine['entry_date'],
                        'expiration_date' => $medicine['expiration_date'],
                    ]);
                }
            });

            session()->flash('flash.banner','Donación registrado con exito.');
            session()->flash('flash.bannerStyle','success');

        return redirect()->route('medicines.donations.index');
    }

    public function searchCitizen()
    {
        $this->clearSearch();

        $this->validate(['document' => 'required'],[
        'document.required' => 'Ingrese cédula para busqueda'
        ]);

        $citizen = Citizen::where('document', $this->document)->first();

        if(!$citizen) {
            $this->addError('document','No se encontró ciudadano con la cédula ingresada');
            return;
        }

        $this->citizen = $citizen;
        $this->fill($citizen);
        $this->estado = $citizen->estado_id;
        $this->parroquia = $citizen->parroquia_id;
        $this->municipio = $citizen->municipio_id;
        $this->citizenExists = true;

    }

    public function clearSearch()
    {
        $this->reset('citizen','first_names','last_names','civil_status','email','phone_number','phone_number_2','address','dob','citizenExists');
    }


    public function updatedEstado()
    {
        $this->municipios = Estado::find($this->estado)->municipios->pluck('municipio', 'id_municipio');
        $this->municipio = null;
        $this->parroquia = null;
        $this->parroquias = [];
    }

    public function updatedMunicipio()
    {
        if ($this->municipio != '#') {
            $this->parroquias = Municipio::find($this->municipio)->parroquias->pluck('parroquia', 'id_parroquia');
        } else {
            $this->parroquias = [];
        }

        $this->parroquia = null;
    }

    public function render()
    {
        return view('livewire.medicines.donations.create', [
            'states' => $this->states,
            'genders' => $this->genders,
            'civil_statuses' => CivilStatusEnum::options(),
        ]);
    }
}
