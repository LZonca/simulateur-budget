<x-app-layout>
    <x-slot name="header">
        <br/><h1 class="text-2xl font-semibold m-4 mt-12 text-center">Résultats obtenus</h1>
    </x-slot>
    <livewire:resultats :simulations="$simulations" />
</x-app-layout>
