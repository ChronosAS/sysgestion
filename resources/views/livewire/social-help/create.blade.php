<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-self-center">
            <div class="bg-slate-200 overflow-hidden shadow-xl sm:rounded-lg">
                <form 
                    x-data="{ dob: '', age: '' }"
                    class="mt-5 mx-10 container-md text-center flex items-center justify-center flex-wrap"
                > 
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-2xl text-gray-900">Registro de Solicitud de Ayudas Medicas</p>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-3/1">
                        <p class="block font-medium text-lg text-gray-900">Datos del Solicitante</p>
                    </div>
                    <div class="mt-5  w-full sm:w-1/4 px-3 ">
                        <x-label for="document" value="Cédula de Identidad " class="text-black " />
                        <div class="flex items-center">
                            <x-input id="document" placeholder="e.j. 01234567" class="text-center block mt-1 w-full truncate rounded-none rounded-l-md disabled:text-slate-400" type="text" name="document" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                            <button class="p-[9px] mt-1 text-white bg-blue-500 hover:bg-blue-600 focus:outline-none rounded-none rounded-r-md" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                            {{-- <button class="p-[9px] mt-1 text-white bg-red-500 hover:bg-red-600 focus:outline-none rounded-none rounded-r-md" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button> --}}
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
                    <div class="mt-5 w-full px-3 sm:w-1/4">
                        <x-label for="profession" value="Profesión" class="text-black " />
                        <x-input id="profession" class="block mt-1 w-full truncate" type="text" name="profession"/>
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
                        <x-input id="dob" class="block mt-1 w-full" type="date" name="dob" x-model="dob"
                            @change="
                                if (dob) {
                                    let today = new Date();
                                    let birthDate = new Date(dob);
                                    let ageNow = today.getFullYear() - birthDate.getFullYear();
                                    let m = today.getMonth() - birthDate.getMonth();
                                    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                                        ageNow--;
                                    }
                                    age = ageNow;
                                } else {
                                    age = '';
                                }
                            "
                        />
                        <x-input-error class="text-xs" for="dob"/>
                    </div>
                    <div class="mt-5 w-full px-3 sm:w-1/6 ">
                        <x-label for="age" value="Edad" class="text-black " />
                        <x-input id="age" class="block mt-1 w-full text-center " type="text" name="age" x-model="age" readonly/>
                        <x-input-error class="text-xs" for="age"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="address" value="Dirección de Habitación" class="text-black"/>
                        <x-input id="address" class="block mt-1 w-full truncate" type="text" name="address"/>
                        <x-input-error class="text-xs" for="address"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="work_address" value="Lugar de Trabajo y Dirección" class="text-black"/>
                        <x-input id="work_address" class="block mt-1 w-full truncate" type="text" name="work_address"/>
                        <x-input-error class="text-xs" for="work_address"/>
                    </div>
                    <div class="mt-5 w-full px-3  sm:w-3/1">
                        <x-label for="medical_aspect" value="Aspecto Médico" class="text-black"/>
                        <x-input id="medical_aspect" class="block mt-1 w-full truncate" type="text" name="medical_aspect"/>
                        <x-input-error class="text-xs" for="medical_aspect"/>
                    </div>
                        <div class=" mt-5 w-full px-3 sm:w-4/2 ">
                        <x-label  value="Grupo Familiar" class="text-black" />
                        <x-table.table class="w-full ">
                            <x-slot name="thead">
                                <tr class="bg-blue-800 text-white ">
                                    <x-table.th class="pb-3 text-center">
                                        Cédula
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Nombre/s
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Apellido/s
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Edad
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Parentesco
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        Edad
                                    </x-table.th>
                                    <x-table.th class="pb-3 text-center">
                                        <button wire:click='addFamilyMember' type="button" class="inline-block cursor-pointer rounded-md bg-blue-900 hover:bg-blue-500 px-6 pb-2 pt-2.5 text-xs  uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">Agregar</button>
                                    </x-table.th>
                                </tr>
                            </x-slot>
                            <x-slot name="tbody">
                                
                                    <tr class="bg-white shadow-md border border-blue-700 text-center">
                                        <x-table.td class="text-black">
                                            <x-input id="family_document"  class="block mt-1 w-full truncate" type="text" name="family_document"   oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                                            <x-input-error class="text-xs" for="family_document"/>
                                        </x-table.td>
                                        <x-table.td class="text-black">
                                            <x-input id="family_first_names" class="block mt-1 w-full truncate" type="text" name="family_first_names"   />
                                            <x-input-error class="text-xs" for="family_first_names"/>
                                        </x-table.td>
                                        <x-table.td class="text-black   ">
                                            <x-input id="family_last_names" class="block mt-1 w-full truncate" type="text" name="family_last_names"   />
                                            <x-input-error class="text-xs" for="family_last_names"/>
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <x-input id="family_age"  class="block mt-1 w-full truncate text-black"  min="0" type="number" name="family_age" value="0" oninput="this.value = this.value.replace(/[^0-9]/g, '');"/>
                                            <x-input-error class="text-xs" for="family_age"/>
                                        </x-table.td>  
                                        <x-table.td class="text-black   ">
                                            <x-input id="family_relation"  class="block mt-1 w-full truncate" type="text" name="family_relation"   />
                                            <x-input-error class="text-xs" for="family_relation"/>
                                        </x-table.td>
                                        <x-table.td class="text-black   ">
                                            <x-input id="family_age"  class="block mt-1 w-full truncate" type="text" name="family_age"   />
                                            <x-input-error class="text-xs" for="family_age"/>
                                        </x-table.td>
                                        <x-table.td class="text-center">
                                            <button type="button" class="text-red-500 hover:text-red-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7">
                                                    <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </x-table.td>
                                    </tr>
                               
                                   
                            </x-slot>
                        </x-table.table>
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
