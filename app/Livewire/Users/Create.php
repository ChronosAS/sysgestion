<?php

namespace App\Livewire\Users;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
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
            'password' => ['required', 'string', Password::default()],
        ],[
            'required' => 'Este campo no puede estar vacio.',
            'document.integer' => 'Formato de cedula invalido.',
            'document.numeric' => 'Formato de cedula invalido.',
            'email.email' => 'Ingrese una dirección de correo electrónico válida.',
            'password.min' => 'La contraseña debe ser de al menos :min caracteres.'
        ]);

        tap(User::create([
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'email_verified_at' => now(),
        ]),function($user){
            $user->assignRole($this->role);
        });

        session()->flash('flash.banner','Usuario creado con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('users.administration');

    }

    #[Layout('layouts.app',['header'=>'Crear Usuario'])]
    public function render()
    {
        return view('livewire.users.create',[
            'roles' =>  Role::all()->pluck('name','name')
        ]);
    }
}
