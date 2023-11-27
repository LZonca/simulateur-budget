<x-app-layout>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulateur de Budget - Mairie d'Arnas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <header class="bg-green-600 text-white py-4">
        <h1 class="text-2xl font-semibold">Simulateur de Budget</h1>
    </header>

    <main class="max-w-2xl mx-auto my-8 p-6 bg-white shadow-md">

        <p class="text-gray-700">Le simulateur de la mairie de la ville d'Arnas a pour but de permettre aux habitants de la ville de proposer un budget qui sera alloué à la préparation de projets futurs au sein de la ville.</p>

        
        

       

        <h2 class="text-xl font-semibold mt-8">Fonctionnalités du simulateur :</h2>
        <ul class="list-disc pl-6 mt-4 text-gray-700">
            <li>Proposez des budgets pour des projets importants dans votre ville.</li>
            <li>Votez pour les projets que vous trouvez les plus pertinents.</li>
            <li>Suivez l'avancement des projets financés par la communauté.</li>
        </ul>

        <h2 class="text-xl font-semibold mt-8">Comment ça fonctionne :</h2>
        <p class="text-gray-700">1. Proposez un budget en décrivant votre projet et en spécifiant le montant nécessaire.</p>
        <p class="text-gray-700">2. Les habitants votent pour les projets qu'ils soutiennent.</p>
        <p class="text-gray-700">3. Les projets les plus votés reçoivent un financement de la mairie.</p>

        <h2 class="text-xl font-semibold mt-8">Contact :</h2>
        <p class="text-gray-700">Pour toute question ou assistance, veuillez contacter <a href="mailto:support@arnasbudget.simulator" class="text-green-600">support@arnasbudget.simulator</a>.</p>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="script.js"></script>

</body>
</html>

</x-app-layout>
