<x-app-layout>
    <x-slot name="header">
        <br>
        <h1 class="text-2xl font-semibold m-4 mt-12 text-center">Liste admins</h1>
    </x-slot>
    <livewire:super-admin-pannel :admins="$admins" />
</x-app-layout>
