<?php

namespace App\Livewire\Users;

use App\Models\Estado;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public User $user;

    public $document;
    public $first_names;
    public $last_names;
    public $dob;
    public $email;
    public $password;

    public function mount(User $user)
    {
        $this->user = $user;

        $this->fill(
            $user->only(
                'document',
                'first_names',
                'last_names',
                'dob',
                'email',
            )
        );

    }

    public function update()
    {
        $this->validate([
            'document' => ['required','integer','numeric'],
            'first_names' => ['required','string','max:255'],
            'last_names' => ['required','string','max:255'],
            'dob' => ['required','date'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->user->id)],
        ],[
            'required' => 'Este campo no puede estar vacio.',
            'document.integer' => 'Formato de cedula invalido.',
            'document.numeric' => 'Formato de cedula invalido.',
            'email.email' => 'Ingrese una dirección de correo electrónico válida.',
            'email.unique' => 'Este correo ya esta registrado a otro usuario.'
        ]);

        $this->user->update([
            'document' => $this->document,
            'first_names' => $this->first_names,
            'last_names' => $this->last_names,
            'dob' => $this->dob,
            'email' => $this->email,
            'password' => ($this->password) ? Hash::make($this->password) : $this->user->password
        ]);

        session()->flash('flash.banner','Usuario actualizado con exito.');
        session()->flash('flash.bannerStyle','success');

        return redirect()->route('users.administration');
    }

    #[Layout('layouts.app',['header'=>'Editar Usuario'])]
    public function render()
    {
        return view('livewire.users.edit');
    }
}
