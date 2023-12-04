<x-app-layout>
    <x-slot name="header">
        <h1>Admin Panel</h1>
    </x-slot>

    <div>
        <livewire:add-categorie />
    </div>
    <x-slot name="header">
        <h1 class="mt-12 text-2xl font-semibold text-center">Admin</h1>
    </x-slot>
    <x-footer/>
</x-app-layout>

