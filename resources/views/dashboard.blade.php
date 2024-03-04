<x-app-layout>
    <x-slot name='header'>
        <br><h1 class="text-2xl font-semibold mt-12 text-center">Bienvenue à la Mairie d'Arnas</h1>

    </x-slot>
    {{-- <div class="mt-4">
        <h1 class="text-2xl font-semibold text-center">Bienvenue à la Mairie d'Arnas</h1>
    </div> --}}
    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg py-8">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
