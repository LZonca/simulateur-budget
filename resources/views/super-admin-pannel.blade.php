<x-app-layout>
    <x-slot name="header">
        <br>
        <h1 class="text-2xl font-semibold m-4 mt-12 text-center">Liste utilisateurs admin</h1>
    </x-slot>
    <livewire:super-admin-pannel :adminUsers="$adminUsers" />
</x-app-layout>
