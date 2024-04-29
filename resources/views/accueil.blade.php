<x-guest-layout>
    <div class="flex items-center bg-green-500 ">
        <img src="{{ asset('/img/arnas_img.png') }}" alt="Logo" class="h-20 mr-25 w-70">
        <h1 class="ml-10 text-2xl font-semibold">Bienvenue à la Mairie d'Arnas</h1>
    </div>
    <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
        <a href="{{ route('login') }}"
            class="p-2 font-semibold text-gray-600 bg-green-500 rounded hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se
            connecter</a>
        <a href="{{ route('register') }}"
            class="p-2 ml-4 font-semibold text-gray-600 bg-green-500 rounded hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">S'inscrire</a>
    </div>
    <br>

    <x-welcome />

    <x-footer />
</x-guest-layout>
