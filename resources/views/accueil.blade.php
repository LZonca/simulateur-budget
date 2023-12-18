<x-guest-layout>
    <div class="flex items-center bg-green-500">
        <img src="{{ asset('/img/arnas_img.png') }}" alt="Logo" class="mr-25 w-70 h-20">
        <h1 class="text-2xl font-semibold ml-10">Bienvenue à la Mairie d'Arnas</h1>
    </div>
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        <a href="{{ route('login') }}"
            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 bg-green-500 p-2 rounded">Se
            connecter</a>
        <a href="{{ route('register') }}"
            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 bg-green-500 p-2 rounded">S'inscrire</a>
    </div>
    <br>
    
    <x-welcome />
    <footer class="absolute w-full bottom-0">
        <x-footer />
    </footer>
</x-guest-layout>
