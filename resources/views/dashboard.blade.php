<x-app-layout>
    <x-slot name='header'>
        <br><h1 class="text-2xl font-semibold mt-12 text-center">Bienvenue à la Mairie d'Arnas</h1>

    </x-slot>
    {{-- <div class="mt-4">
        <h1 class="text-2xl font-semibold text-center">Bienvenue à la Mairie d'Arnas</h1>
    </div> --}}
    <div class="py-5">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg py-8">
                <!--<div class="flex items-center bg-green-500">
    <img src="{{ asset('/img/arnas_img.png') }}" alt="Logo" class="h-20 mr-25 w-70">
    <h1 class="ml-10 text-2xl font-semibold">Bienvenue à la Mairie d'Arnas</h1>
</div>-->
                <main class="mx-auto max-w-screen-lg bg-white flex justify-between">

                    <section class="w-1/3">
                        <x-mary-card title="Présentation de la Mairie" class="bg-gray-200" shadow separator>
                            La mairie d'Arnas est au service de la communauté pour assurer le bien-être et le
                            développement de la ville. Nous sommes dédiés à la transparence, à l'efficacité et à la participation
                            citoyenne.
                        </x-mary-card>

                        <!--<h2 class="mb-4 text-2xl font-semibold">Présentation de la Mairie</h2>
                        <p class="text-gray-700">La mairie d'Arnas est au service de la communauté pour assurer le bien-être et le
                            développement de la ville. Nous sommes dédiés à la transparence, à l'efficacité et à la participation
                            citoyenne.</p>-->

                    </section>
                    <!--<section class="mt-8">
                        <h2 class="mb-4 text-2xl font-semibold">Nos Services</h2>
                        <ul class="pl-6 text-gray-700 list-disc">
                            <li>Administration municipale</li>
                            <li>Gestion des services publics</li>
                            <li>Projets communautaires</li>
                            <li>Événements locaux</li>
                        </ul>
                    </section>-->
                    <section class="w-1/3 mx-10">
                        <x-mary-card title="But de ce simulateur" class="bg-gray-200" shadow separator>
                            Ce simulateur a pour but de permettre aux habitants de notre ville
                            de pouvoir gérer et planifier virtuellement le budget et les dépenses d'Arnas de manière
                            interactive et ludique. Ces outils offrent une alternative à la gestion des dépenses
                            traditionnelle, qui consiste à analyser et à catégoriser les dépenses dans des tableaux.
                        </x-mary-card>

                        <!--<h2 class="mb-4 text-2xl font-semibold">But de ce simulateur</h2>
                        <p class="text-gray-700">Ce simulateur a pour but de permettre aux habitants de notre ville
                            de pouvoir gérer et planifier virtuellement le budget et les dépenses d'Arnas de manière
                            interactive et ludique. Ces outils offrent une alternative à la gestion des dépenses
                            traditionnelle, qui consiste à analyser et à catégoriser les dépenses dans des tableaux.
                        </p>-->

                    </section>

                    <section class="w-1/3">
                        <x-mary-card title="Engagement Communautaire" class="bg-gray-200" shadow separator>
                            Nous croyons en la participation active des citoyens dans la prise de décision.
                            Le
                            simulateur de budget est l'une de nos initiatives pour permettre aux habitants de proposer et de voter
                            pour des projets qui façonnent l'avenir de notre ville.
                        </x-mary-card>

                        <!--<h2 class="mb-4 text-2xl font-semibold">Engagement Communautaire</h2>
                        <p class="mb-10 text-gray-700">Nous croyons en la participation active des citoyens dans la prise de décision.
                            Le
                            simulateur de budget est l'une de nos initiatives pour permettre aux habitants de proposer et de voter
                            pour des projets qui façonnent l'avenir de notre ville.</p>-->

                    </section>
                </main>

            </div>
        </div>

    </div>
</x-app-layout>
