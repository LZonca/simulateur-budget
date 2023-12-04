
<x-app-layout>


    <x-slot name="header">
        <h1 class="mt-12 text-2xl font-semibold text-center">Simulateur de Budget</h1>
    </x-slot>

    <main class="max-w-6xl p-6 mx-auto bg-white shadow-md my-14">

        <p class="text-gray-700">Le simulateur de la mairie de la ville d'Arnas a pour but de permettre aux habitants de
            la ville de proposer un budget qui sera alloué à la préparation de projets futurs au sein de la ville.</p>

        <h2 class="mt-8 text-xl font-semibold">Fonctionnalités du simulateur :</h2>
        <ul class="pl-6 mt-4 text-gray-700 list-disc">
            <li>Proposez des budgets pour des projets importants dans votre ville.</li>
            <li>Votez pour les projets que vous trouvez les plus pertinents.</li>
            <li>Suivez l'avancement des projets financés par la communauté.</li>
        </ul>

        <h2 class="mt-8 text-xl font-semibold">Comment ça fonctionne :</h2>
        <p class="text-gray-700">1. Proposez un budget en décrivant votre projet et en spécifiant le montant nécessaire.
        </p>
        <p class="text-gray-700">2. Les habitants votent pour les projets qu'ils soutiennent.</p>
        <p class="text-gray-700">3. Les projets les plus votés reçoivent un financement de la mairie.</p><br><br><br>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="script.js"></script>
        <x-simulateur />
    </main>

</x-app-layout>
