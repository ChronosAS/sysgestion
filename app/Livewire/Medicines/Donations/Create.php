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
    public $phone_number_2;
    public $grade;
    public $civil_status;
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
        dd($this->donation_medicines);
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
        ]);
    }
}
