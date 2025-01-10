<div>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold leading-tight text-gray-800">{{ $official->first_names.' '.$official->last_names }}</h2>
                <a href="{{ route('officials.edit', $official->id) }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">Editar</a>
            </div>
        </div>
    </div>
</div>
