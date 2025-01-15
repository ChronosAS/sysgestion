<div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">{{ $application->code }}</h2>
                <div>
                    <a href="{{ route('applications.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Regresar</a>
                    <a href="{{ route('applications.edit', $application) }}" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Editar</a>
                </div>
            </div>
        </div>
        <div class="container mx-auto p-4">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Información de solicitud</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Solicitante</label>
                        <p class="mt-1 text-gray-900 text-sm">{{ $application->applicant->first_names.' '.$application->applicant->last_names }}</p>
                    </div>
                     <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Beneficiario</label>
                        <p class="mt-1 text-gray-900 text-sm">{{ $application->recipientable->first_names.' '.$application->recipientable->last_names}}</p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Estado</label>
                        <p class="mt-1 text-gray-900 text-sm">{{ $application->status->label()}}</p>
                    </div>
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Fecha de solicitud</label>
                        <p class="mt-1 text-gray-900 text-sm"> {{ \Carbon\Carbon::parse($application->application_date)->format('d-m-Y') }}</p>
                    </div>
                    @if($application->delivery_date)
                        <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                            <label class="block text-md font-bold text-gray-800">Genero</label>
                            <p class="mt-1 text-gray-900 text-sm">{{ \Carbon\Carbon::parse($application->delivery_date)->format('d-m-Y') }}</p>
                        </div>
                    @endif
                    <div class="bg-blue-200 border-l-4 border-blue-500 p-4">
                        <label class="block text-md font-bold text-gray-800">Documentos</label>
                        <ul>
                            @foreach($application->getMedia('files') as $file)
                            <li>
                                <a href="{{ asset('files/'.$file->id.'/'. $file->file_name) }}" target='__blank'>{{ $file->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="relative overflow-x-auto shadow-md">
                <table class="w-full border-white text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class='text-xs text-white-700 uppercase bg-gray-50 '>
                        
                    </thead>
                    <tbody>
                        {{-- <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        </tr> --}}
                    </tbody>
                    <tfoot>
                        {{ $tfoot }}
                         <tr class="font-semibold text-gray-900 dark:text-white">
                            <th scope="row" class="px-6 py-3 text-base">Total</th>
                            <td class="px-6 py-3">3</td>
                            <td class="px-6 py-3">21,000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>            
        </div>
    </div>
</div>
