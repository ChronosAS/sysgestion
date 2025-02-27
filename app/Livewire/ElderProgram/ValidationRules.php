<?php

namespace App\Livewire\ElderProgram;

use App\Enum\Citizens\CivilStatusEnum;
use App\Enum\GenderEnum;
use Illuminate\Validation\Rule;

trait ValidationRules
{
    protected function rules() : array
    {
        return [
            'document' => $this->citizenExists ? 'required' : 'required|unique:citizens,document',
            'first_names' => 'required|string|max:255',
            'last_names' => 'required|string|max:255',
            'dob' => ['required', 'date', function ($attribute, $value, $fail) {
            $minAge = $this->gender === 'M' ? 65 : 60;
            if (-((int) now()->diffInYears($value)) < $minAge) {
                $fail('Debe tener al menos ' . $minAge . ' años de edad.');
            }
            }],
            'city_of_birth' => ['required','string'],
            'email' => 'email',
            'phone_number' => 'required|string|max:20',
            'phone_number_2' => 'string|max:20',
            'occupation' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'medical_aspect' => 'required|string|max:255',
            'family_monthly_income' => ['required', 'numeric', 'min:0', 'regex:/^\d{1,10}(\.\d{1,2})?$/'],
            'family_monthly_expenses' => ['required', 'numeric', 'min:0', 'regex:/^\d{1,10}(\.\d{1,2})?$/'],
            'gender' => ['required', Rule::enum(GenderEnum::class)],
            'civil_status' => ['required', Rule::enum(CivilStatusEnum::class)],
            'estado' => 'required',
            'municipio' => 'required',
            'parroquia' => 'required',
            'familyMembers.*.document' => count($this->familyMembers) > 0 ? 'required' : '',
            'familyMembers.*.first_names' => (count($this->familyMembers) > 0 ? 'required' : '').'|string|max:100',
            'familyMembers.*.last_names' => (count($this->familyMembers) > 0 ? 'required' : '').'|string|max:100',
            'familyMembers.*.age' => (count($this->familyMembers) > 0 ? 'required' : '').'|integer|min:1',
        ];
    }

    protected function messages() : array
    {
        return [
            'document.required' => 'El documento es obligatorio.',
            'document.unique' => 'El documento ya está registrado.',
            'first_names.required' => 'Los nombres son obligatorios.',
            'first_names.string' => 'Los nombres deben ser una cadena de texto.',
            'first_names.max' => 'Los nombres no deben exceder los 255 caracteres.',
            'last_names.required' => 'Los apellidos son obligatorios.',
            'last_names.string' => 'Los apellidos deben ser una cadena de texto.',
            'last_names.max' => 'Los apellidos no deben exceder los 255 caracteres.',
            'dob.required' => 'La fecha de nacimiento es obligatoria.',
            'dob.date' => 'La fecha de nacimiento no es válida.',
            'dob.before_or_equal' => 'Debe tener al menos :minAge años de edad.',
            'city_of_birth.required' => 'La ciudad de nacimiento es obligatoria.',
            'city_of_birth.string' => 'La ciudad de nacimiento debe ser una cadena de texto.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            // 'email.unique' => 'El correo electrónico ya está registrado.',
            'phone_number.required' => 'El número de teléfono es obligatorio.',
            'phone_number.string' => 'El número de teléfono debe ser una cadena de texto.',
            'phone_number.max' => 'El número de teléfono no debe exceder los 20 caracteres.',
            'phone_number_2.string' => 'El segundo número de teléfono debe ser una cadena de texto.',
            'phone_number_2.max' => 'El segundo número de teléfono no debe exceder los 20 caracteres.',
            'occupation.required' => 'La ocupación es obligatoria.',
            'occupation.string' => 'La ocupación debe ser una cadena de texto.',
            'occupation.max' => 'La ocupación no debe exceder los 100 caracteres.',
            'address.required' => 'La dirección es obligatoria.',
            'address.string' => 'La dirección debe ser una cadena de texto.',
            'address.max' => 'La dirección no debe exceder los 255 caracteres.',
            'medical_aspect.required' => 'El aspecto médico es obligatorio.',
            'medical_aspect.string' => 'El aspecto médico debe ser una cadena de texto.',
            'medical_aspect.max' => 'El aspecto médico no debe exceder los 255 caracteres.',
            'family_monthly_income.required' => 'El ingreso familiar mensual es obligatorio.',
            'family_monthly_income.numeric' => 'El ingreso familiar mensual debe ser un número.',
            'family_monthly_income.min' => 'El ingreso familiar mensual no puede ser negativo.',
            'family_monthly_income.regex' => 'El ingreso familiar mensual debe tener hasta 10 dígitos y 2 decimales.',
            'family_monthly_expenses.required' => 'El promedio de gastos familiares mensuales es obligatorio.',
            'family_monthly_expenses.numeric' => 'El promedio de gastos familiares mensuales debe ser un número.',
            'family_monthly_expenses.min' => 'El promedio de gastos familiares mensuales no puede ser negativo.',
            'family_monthly_expenses.regex' => 'El promedio de gastos familiares mensuales debe tener hasta 10 dígitos y 2 decimales.',
            'gender.required' => 'El género es obligatorio.',
            'civil_status.required' => 'El estado civil es obligatorio.',
            'estado.required' => 'El estado es obligatorio.',
            'municipio.required' => 'El municipio es obligatorio.',
            'parroquia.required' => 'La parroquia es obligatoria.',
            'familyMembers.*.document.required' => 'El documento del miembro de la familia es obligatorio.',
            'familyMembers.*.first_names.required' => 'Los nombres del miembro de la familia son obligatorios.',
            'familyMembers.*.first_names.string' => 'Los nombres del miembro de la familia deben ser una cadena de texto.',
            'familyMembers.*.first_names.max' => 'Los nombres del miembro de la familia no deben exceder los 100 caracteres.',
            'familyMembers.*.last_names.required' => 'Los apellidos del miembro de la familia son obligatorios.',
            'familyMembers.*.last_names.string' => 'Los apellidos del miembro de la familia deben ser una cadena de texto.',
            'familyMembers.*.last_names.max' => 'Los apellidos del miembro de la familia no deben exceder los 100 caracteres.',
            'familyMembers.*.age.required' => 'La edad del miembro de la familia es obligatoria.',
            'familyMembers.*.age.integer' => 'La edad del miembro de la familia debe ser un número entero.',
            'familyMembers.*.age.min' => 'La edad del miembro de la familia debe ser al menos 1.',
        ];
    }
}
