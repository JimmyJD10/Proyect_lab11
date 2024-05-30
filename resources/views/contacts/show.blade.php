<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                @if($contact->photo_path)
                    <img src="{{ asset('storage/' . $contact->photo_path) }}" alt="{{ $contact->first_name }} {{ $contact->last_name }}" 
                    class="block w-full max-h-80 border-gray-300 rounded-md shadow-sm">
                @else
                    <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile" 
                    class="block w-full max-h-80 border-gray-300 rounded-md shadow-sm">
                @endif
            </div>
            <div class="sm:col-span-3">
                <label class="block text-md font-medium leading-6 text-gray-900">Nombres:</label>
                <p class="mt-2 text-gray-900">{{ $contact->first_name }}</p>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-md font-medium leading-6 text-gray-900">Apellidos:</label>
                <p class="mt-2 text-gray-900">{{ $contact->last_name }}</p>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-md font-medium leading-6 text-gray-900">Número:</label>
                <p class="mt-2 text-gray-900">{{ $contact->phone }}</p>
            </div>
            <div class="sm:col-span-6">
                <label class="block text-md font-medium leading-6 text-gray-900">Correo electrónico:</label>
                <p class="mt-2 text-gray-900">{{ $contact->email }}</p>
            </div>
            <div class="sm:col-span-6">
                <label class="block text-md font-medium leading-6 text-gray-900">Dirección:</label>
                <p class="mt-2 text-gray-900">{{ $contact->address }}</p>
            </div>
            <div class="sm:col-span-6">
                <label class="block text-md font-medium leading-6 text-gray-900">Empresa:</label>
                <p class="mt-2 text-gray-900">{{ $contact->company }}</p>
            </div>
            <div class="sm:col-span-6">
                <label class="block text-md font-medium leading-6 text-gray-900">Notas:</label>
                <p class="mt-2 text-gray-900">{{ $contact->notes }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
