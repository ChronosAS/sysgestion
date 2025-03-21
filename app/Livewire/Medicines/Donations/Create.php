<?php

namespace App\Livewire\Medicines\Donations;

use App\Enum\GenderEnum;
use App\Models\Estado;
use App\Models\Municipio;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Create extends Component
{
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

    public $searchMed;

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

    public $municipios = [];
    public $parroquias = [];
    public $genders = [];
    public $states = [];
    public $presentations = [];
    public $compositions = [];

    public function mount()
    {
        $this->genders = GenderEnum::options();
        $this->states = Estado::all()->map(function($estado) {
            return [
                'id' => $estado->id_estado,
                'name' => $estado->estado,
            ];
        });
        $this->presentations = [
            'Pastillas',
            'Jarabe',
            'Ampollas',
        ];
        $this->compositions = [
            'mg',
            'ml',
            'cc (cm³)',
        ];
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
