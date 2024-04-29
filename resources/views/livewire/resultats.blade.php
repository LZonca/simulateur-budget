<div class="py-5">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg py-8">
            <div class="container mx-auto mt-6">
                <table class="min-w-full border border-gray-300">
                    <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Nom de la simulation</th>
                        <th class="border border-gray-300 px-4 py-2">Date</th>
                        <th class="border border-gray-300 px-4 py-2">Résultats</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($simulations as $simulation)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $simulation->simulation_nom }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $simulation->simulation_date }}</td>
                            <td class="border border-gray-300 px-4 py-2"><x-mary-button icon="o-eye" link="{{route('test', $simulation->id)}}" /></td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a target='_blank' href="{{ route('generatePDF', $simulation) }}">
                                    <x-mary-button wire:click="generateResult({{ $simulation->id }})" label="Télécharger" icon-right="o-arrow-down-tray" spinner />
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
