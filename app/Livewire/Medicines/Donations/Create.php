<?php

namespace App\Livewire\Medicines\Donations;

use App\Enum\GenderEnum;
use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use App\Models\Citizen;
use App\Models\Estado;
use App\Models\Medicine;
use App\Models\Municipio;
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
    public $grade;
    public $civil;
    public $estado;
    public $municipio;
    public $parroquia;
    public $dob;
    public $address;
    public $observation;

    public $comercial_name;
    public $presentation;
    public $active_component;
    public $composition_quantity;
    public $composition_unit;
    public $composition;
    public $laboratory;
    public $stock;
    public $entry_date;
    public $expiration_date;

    public $medicaments = [];
    public $medicine;

    public $municipios = [];
    public $parroquias = [];
    public $genders = [];
    public $states = [];
    public $presentations = [];
    public $compositions = [];

    public $citizenExists = false;
    public $newMed = false;

    public function searchCitizen()
    {
        $this->reset('citizen','first_names','last_names','civil_status','phone_number','phone_number_2','address','dob','citizenExists');
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
        $this->parroquia = $citizen->parroquia_id;
        $this->citizenExists = true;

    }

    public function clearSearch()
    {
        $this->reset('citizen','first_names','last_names','civil_status','email','phone_number','phone_number_2','address','dob','citizenExists');
    }

    public function mount()
    {
        $this->genders = GenderEnum::options();
        $this->states = Estado::all()->map(function($estado) {
            return [
                'id' => $estado->id_estado,
                'name' => $estado->estado,
            ];
        })->toArray();

        $medicaments = Medicine::all()->map(function($medicine) {
            return [
                'id' => $medicine->id,
                'name' => $medicine->name.'('.$medicine->composition_quantity.$medicine->composition->name.')',
            ];
        })->toArray();

        $this->medicaments = $medicaments;

        $this->presentations = PresentationEnum::options();

        $this->compositions = CompositionEnum::options();
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
        ]);
    }
}
