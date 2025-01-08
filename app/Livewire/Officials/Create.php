<?php

namespace App\Livewire\Officials;

use App\Models\Official;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Create extends Component
{
    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $phone_number;
    public $gender;
    public $beneficiaries = [];

    #[Layout('layouts.app',['header'=>'Crear Funcionario'])]
    public function render()
    {
        return view('livewire.officials.create');
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
            'gender' => 'required|string',
        ]);

        Official::create([
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'gender' => $this->gender,
        ]);

        session()->flash('message', 'Official created successfully.');

        return redirect()->route('officials.index');
    }
}
