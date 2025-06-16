<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Registro de Solicitud de Medicamentos</p>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label for="document" value="Cédula de Identidad " class="text-black " />
                        <div class="flex items-center">
                            <x-input id="document" placeholder="e.j. 01234567" class="text-center block mt-1 w-full truncate rounded-none rounded-l-md disabled:text-slate-400" type="text" name="document" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                        </div>
                        <x-input-error class="text-xs" for="document"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="first_names" value="Nombres" class="text-black " />
                        <x-input id="first_names" class="block mt-1 w-full truncate" type="text" name="first_names" />
                        <x-input-error class="text-xs" for="first_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="last_names" value="Apellidos" class="text-black " />
                        <x-input id="last_names" class="block mt-1 w-full truncate" type="text" name="last_names"/>
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="occupation" value="Ocupación" class="text-black " />
                        <x-input id="occupation" class="block mt-1 w-full truncate" type="text" name="occupation"/>
                        <x-input-error class="text-xs" for="last_names"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="gender" value="Sexo" class="block   text-black"/>
                        <select id="gender" name="gender" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:border-blue-500 focus:ring-blue-500  shadow-sm sm:text-sm rounded-md text-center">
                            <option value="#" class="text-center ">Seleccionar</option>
                        </select>
                        <x-input-error class="text-xs" for="gender"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="email" value="Correo Electrónico" class="text-black " />
                        <x-input id="email" placeholder="e.j. correo@electronico.com" class="block mt-1 w-full truncate text-center" type="text" name="email"  />
                        <x-input-error class="text-xs" for="email"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number" value="Teléfono" class="text-black " />
                        <x-input id="phone_number" placeholder="" class="block mt-1 w-full truncate" type="text" name="phone_number"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');"/>
                        <x-input-error class="text-xs" for="phone_number"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="phone_number_2" value="Teléfono 2" class="text-black " />
                        <x-input id="phone_number_2" placeholder="" class="block mt-1 w-full truncate" type="text" name="phone_number_2"   oninput="this.value = this.value.replace(/[^0-9+\- ]/g, '');"/>
                        <x-input-error class="text-xs" for="phone_number_2"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="education_level" value="Nivel de Instrucción" class="text-black " />
                        <x-input id="education_level" class="block mt-1 w-full truncate" type="text" name="education_level"  />
                        <x-input-error class="text-xs" for="education_level"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6">
                        <x-label for="civil_status" value="Edo. Civil" class="block   text-black"/>
                        <select id="civil_status" name="civil_status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                            <option value="#" class="text-center ">Seleccionar</option>
                        </select>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="dob" value="Fecha de Nacimiento" class="text-black" />
                        <x-input id="dob" class="block mt-1 w-full " type="date" name="dob"/>
                        <x-input-error class="text-xs" for="dob"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="city_of_birth" value="Lugar de Nacimiento" class="text-black" />
                        <x-input id="city_of_birth" class="block mt-1 w-full truncate" type="text" name="city_of_birth"/>
                        <x-input-error class="text-xs" for="city_of_birth"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="parroquia" value="Parroquia" class="block   text-black"/>
                        <select id="parroquia" name="parroquia" class="mt-1 block w-full pl-3 pr-10 py-2 text-base cursor-pointer border-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md text-center">
                            <option value="#" class="text-center ">Seleccionar</option>
                        </select>
                        <x-input-error class="text-xs" for="parroquia"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/3">
                        <x-label for="account_number" value="Número de Cuenta" class="text-black" />
                        <x-input id="account_number" placeholder="e.j. 01234567890123456789" class="block mt-1 w-full truncate text-center" type="text" name="account_number" maxlength="20" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                        <x-input-error class="text-xs" for="account_number"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="address" value="Dirección de Habitación" class="text-black"/>
                        <x-input id="address" class="block mt-1 w-full truncate" type="text" name="address"/>
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="medical_aspect" value="Aspecto Médico" class="text-black"/>
                        <x-input id="medical_aspect" class="block mt-1 w-full truncate" type="text" name="medical_aspect"/>
                        <x-input-error class="text-xs" for="medical_aspect"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-3/1 ">
                        <p class="block font-medium text-sm text-gray-900">Aspecto Socio-Económico</p>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="family_monthly_income" value="Ingreso Familiar" class="text-black"/>
                        <x-input id="family_monthly_income" placeholder="0.00" class="block mt-1 w-full truncate text-center" type="text" name="family_monthly_income" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').replace(/^(\d{10})\d+(\.\d{0,2})?$/, '$1$2');" />
                        <x-input-error class="text-xs" for="family_monthly_income"/>
                    </div>
                    <div class=" mt-5 w-full px-3 sm:w-1/2">
                        <x-label for="family_monthly_expenses" value="Egreso Familiar" class="text-black"/>
                        <x-input id="family_monthly_expenses" placeholder="0.00" class="block mt-1 w-full truncate text-center" type="text" name="family_monthly_expenses" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1').replace(/^(\d{10})\d+(\.\d{0,2})?$/, '$1$2');" />
                        <x-input-error class="text-xs" for="family_monthly_expenses"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="psychosocial_aspect" value="Aspecto Psico-social" class="text-black"/>
                        <x-input id="psychosocial_aspect" class="block mt-1 w-full truncate" type="text" name="psychosocial_aspect"/>
                        <x-input-error class="text-xs" for="psychosocial_aspect"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="environmental_aspect" value="Aspecto Físico-ambiental" class="text-black"/>
                        <x-input id="environmental_aspect" class="block mt-1 w-full truncate" type="text" name="environmental_aspect"/>
                        <x-input-error class="text-xs" for="environmental_aspect"/>
                    </div>
                    <div class="mt-5  mx-10 container-md  text-center  flex items-center justify-center flex-wrap">
                        <x-button-href href="{{ route('medicines.medicine-applications.index')}}" class="ms-4 mt-5 mb-5 bg-blue-900 inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                            Regresar
                        </x-button-href>
                        <x-button class="ms-4 mt-5 mb-5 bg-green-600 hover:bg-green-500">
                            Registrar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
