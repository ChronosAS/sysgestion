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
    public $gender;
    public $estado;
    public $parroquia;
    public $municipio;

    public $municipios = [];
    public $parroquias = [];

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


    public function render()
    {
        return view('livewire.medicines.donations.create',[
            'states' => Estado::all()->map(function($estado) {
                 return [
                     'id' => $estado->id_estado,
                     'name' => $estado->estado,
                 ];
             }),
            'genders' => GenderEnum::options()
        ]);
    }
}
