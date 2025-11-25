<?php

namespace App\Livewire\ElderProgram;

use App\Enum\Citizens\CivilStatusEnum;
use App\Enum\GenderEnum;
use App\Livewire\ElderProgram\ValidationRules;
use App\Models\Citizen;
use App\Models\ElderProgramMember;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Create extends Component
{
    use ValidationRules;

    public Citizen $citizen;

    public $document;
    public $first_names;
    public $last_names;
    public $occupation;
    public $gender;
    public $email;
    public $phone_number;
    public $phone_number_2;
    public $education_level;
    public $civil_status;
    public $dob;
    public $city_of_birth;
    public $account_number;
    public $family_monthly_income;
    public $family_monthly_expenses;
    public $estado;
    public $municipio;
    public $parroquia;
    public $address;
    public $medical_aspect;
    public $psychosocial_aspect;
    public $environmental_aspect;
    public $citizenExists = false;

    // public $municipios = [];
    // public $parroquias = [];
    public $familyMembers = [];


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

    // public function updatedEstado()
    // {

    //     $this->municipios = Estado::find($this->estado)->municipios->pluck('municipio','id_municipio');

    //     $this->municipio = null;
    //     $this->parroquia = null;
    //     $this->parroquias = [];

    // }

    // public function updatedMunicipio()
    // {

    //     if($this->municipio != '#')
    //         $this->parroquias = Municipio::find($this->municipio)->parroquias->pluck('parroquia','id_parroquia');
    //     else
    //         $this->parroquias = [];

    //     $this->parroquia = null;
    // }

    public function save()
    {
        $this->validate();

        if($this->citizenExists == false){
            $this->citizen = Citizen::create([
                'document' => $this->document,
                'first_names' => $this->first_names,
                'last_names' => $this->last_names,
                'civil_status' => $this->civil_status,
                'dob' => $this->dob,
                'gender' => $this->gender,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'phone_number_2' => $this->phone_number_2,
                'address' => $this->address,
                'estado_id' => 2,
                'municipio_id' => 11,
                'parroquia_id' => $this->parroquia,
            ]);
        }

        if(count($this->familyMembers)>0){
            $this->citizen->familyMembers()->createMany($this->familyMembers);
        }

        ElderProgramMember::create([
            'elder_id' => $this->citizen->id,
            'occupation' => $this->occupation,
            'education_level' => $this->education_level,
            'medical_aspect' => $this->medical_aspect,
            'psychosocial_aspect' => $this->psychosocial_aspect,
            'environmental_aspect' => $this->environmental_aspect,
            'city_of_birth' => $this->city_of_birth,
            'account_number' => $this->account_number,
            'family_monthly_income' => $this->family_monthly_income,
            'family_monthly_expenses' => $this->family_monthly_expenses,
        ]);



        session()->flash('flash.banner','Abuelo registrado con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('elder-program.index');
    }

    public function render()
    {
        return view('livewire.elder-program.create', [
            'genders' => GenderEnum::options(),
            'civil_statuses' => CivilStatusEnum::options(),
            'parroquias' => Parroquia::where('id_municipio',11)->pluck('parroquia','id_parroquia'),
        ]);
    }
}
