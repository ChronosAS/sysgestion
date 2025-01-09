<?php

namespace App\Livewire\Officials\Beneficiaries;

use App\Enum\GenderEnum;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $showAddBeneficiaryModal = false;

    public $beneficiaries = [];

    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $phone_number;
    public $address;
    public $gender;
    public $relationship;


    public function mount($beneficiaries)
    {
        $this->beneficiaries = $beneficiaries;
    }

    public function add()
    {
        $this->validate([
            'document' => 'required|string|max:255',
            'first_names' => 'required|string|max:255',
            'last_names' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'gender' => ['required',Rule::enum(GenderEnum::class)],
            'relationship' => 'required|string|max:255',
        ]);

        $this->beneficiaries[] = [
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'gender' => $this->gender,
            'relationship' => $this->relationship,
        ];

        $this->dispatch('beneficiaryAdded', $this->beneficiaries);

        // Reset the form fields after adding the beneficiary
        $this->reset([
            'document',
            'first_names',
            'last_names',
            'dob',
            'email',
            'phone_number',
            'address',
            'gender',
            'relationship'
        ]);

        $this->toggleModal();
    }

    #[On('addBeneficiaryModal')]
    public function toggleModal()
    {
        $this->showAddBeneficiaryModal = !$this->showAddBeneficiaryModal;
    }
    public function render()
    {
        return view('livewire.officials.beneficiaries.create',[
            'genders' => GenderEnum::options(),
        ]);
    }
}
