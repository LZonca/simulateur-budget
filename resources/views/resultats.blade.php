<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold m-4 mt-12 text-center">Résultats obtenus</h1>
    </x-slot>

    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg py-8">
                <div class="container mx-auto mt-6">
                    <table class="min-w-full border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Utilisateur</th>
                                <th class="border border-gray-300 px-4 py-2">Nom de la simulation</th>
                                <th class="border border-gray-300 px-4 py-2">Date</th>
                                <th class="border border-gray-300 px-4 py-2">Résultats</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($simulations as $simulation)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $simulation->owner->name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $simulation->simulations_nom }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $simulation->simulations_date }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $simulation->simulations_resultats }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
