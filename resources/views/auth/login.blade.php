<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="w-full sm:w-96 bg-white p-8 rounded-lg shadow-md">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="text-3xl font-semibold text-center mb-6 text-gray-800">Connexion</h1>
        <x-login-form />

    </x-authentication-card>
</x-guest-layout>
