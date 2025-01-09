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

    #[Layout('layouts.app',['header'=>'Crear Funcionario'])]
    public function render()
    {
        return view('livewire.officials.create',[
            'genders' => GenderEnum::options(),
        ]);
    }

    #[On('beneficiaryAdded')]
    public function addBeneficiary($beneficiaries)
    {
        $this->beneficiaries = $beneficiaries;
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
            'gender' => ['required', 'string', Rule::enum(GenderEnum::class)],
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

        session()->flash('message', 'Funcionario creado.');

        return redirect()->route('officials.index');
    }
}
