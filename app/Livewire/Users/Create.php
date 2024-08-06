<?php

namespace App\Livewire\Users;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    use PasswordValidationRules;

    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $password;
    public $role;


    public function save()
    {
        $this->validate([
            'document' => ['required','integer','numeric'],
            'first_names' => ['required','string','max:255'],
            'last_names' => ['required','string','max:255'],
            'dob' => ['required','date'],
            'role' => ['required'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')],
            'password' => $this->passwordRules(),
        ]);
    }

    #[Layout('layouts.app',['header'=>'Crear Usuario'])]
    public function render()
    {
        return view('livewire.users.create',[
            'roles' =>  Role::all()->pluck('name')
        ]);
    }
}
