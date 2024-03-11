
<x-app-layout>


    <x-slot name="header">
        <br><h1 class="text-2xl font-semibold mt-12 text-center">Simulateur de Budget</h1>
    </x-slot>

    <main class="max-w-6xl my-4 p-6 mx-auto bg-white shadow-md sm:rounded-lg ">
        <section class="bg-gray-900 text-white">
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="mx-auto max-w-lg text-center">



                    <p class="mt-4 text-gray-300">
                        Félicitations ! Vous venez d’être nommé(e) maire d'Arnas .
                        Compte tenu de vos qualités et de vos compétences, il ne faisait aucun doute que vous arriveriez un jour aux plus hautes fonctions de la commune.
                        Conscient de votre appétence pour les chiffres, vous avez la lourde tâche d’élaborer le budget de la commune d'Arnas de cette année.
                        Avec l’aide de votre conseiller, vous allez donc devoir fixer le montant juste pour chaque mission d'Arnas.
                        Pour ce faire vous avez deux moyens d’agir : soit distribuer manuellement les sommes à l’aide des jauges soit sélectionner les économies suggérées (ou allier les deux options).
                        Le temps presse, la commune compte sur vos actions... C’est à vous !
                    </p>
                </div>

                <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <a
                        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10">


                        <svg  xmlns="http://www.w3.org/2000/svg"
                              width="45px"
                             height="47px"
                             stroke-width="1.5"
                             viewBox="0 0 24 24"
                             color="#FF1493">
                            <path d="M4.11543 14.0149C3.95724 15.3855 3.95988 16.6715 4.01198 17.6795C4.07734 18.9439 5.05607 19.9227 6.3205 19.988C7.32849 20.0401 8.61453 20.0428 9.98508 19.8846M4.11543 14.0149C4.39374 11.6036 5.16988 8.93063 7.05025 7.05025C8.93063 5.16988 11.6036 4.39374 14.0149 4.11543M4.11543 14.0149L9.98508 19.8846M9.98508 19.8846C12.3964 19.6063 15.0694 18.8301 16.9497 16.9497C18.8301 15.0694 19.6063 12.3964 19.8846 9.98508M14.0149 4.11543C15.3855 3.95724 16.6715 3.95988 17.6795 4.01198C18.9439 4.07734 19.9227 5.05607 19.988 6.3205C20.0401 7.32849 20.0428 8.61453 19.8846 9.98508M14.0149 4.11543L19.8846 9.98508M9.17158 14.8284L10.5858 13.4142M10.5858 13.4142L9.17158 12M10.5858 13.4142L12 14.8284M10.5858 13.4142L13.4142 10.5858M13.4142 10.5858L14.8284 9.17158M13.4142 10.5858L12 9.17158M13.4142 10.5858L14.8284 12" stroke="#currentColor"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>

                        <h1 class="mt-4 text-xl font-bold text-white">Loisirs</h1>

                        <input type="checkbox" class="toggle" checked />

                        <p class="mt-1 text-sm text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                            distinctio alias voluptatum blanditiis laudantium.
                        </p>
                    </a>

                    <a
                        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                        href="/services/digital-campaigns"
                    >
                        <?xml version="1.0" encoding="UTF-8"?>

                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             width="45px"
                             height="47px"
                             viewBox="0 0 24 24"
                             color="#FF1493">
                            <path d="M7 10L15 10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6 14L7 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path><path d="M15 14L16 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M6 18H2V20.4C2 20.7314 2.26863 21 2.6 21H5.4C5.73137 21 6 20.7314 6 20.4V18ZM6 18H13" stroke="#currentColor" stroke-width="1.5" stroke-linecap="round">
                            </path>
                            <path d="M2 18V11.4105C2 11.1397 2.05502 10.8716 2.16171 10.6227L4.4805 5.21216C4.79566 4.47679 5.51874 4 6.31879 4H15.6812C16.4813 4 17.2043 4.47679 17.5195 5.21216L19.8383 10.6227C19.945 10.8716 20 11.1397 20 11.4105V12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M17 23C17 23 17.9 19.8824 20 18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.8022 21.4245L19.6677 21.4372C17.9758 21.5961 16.469 20.3541 16.3021 18.663C16.1353 16.9719 17.3715 15.4721 19.0634 15.3131L22.049 15.0326C22.2406 15.0146 22.4111 15.1552 22.43 15.3466L22.6847 17.9276C22.8589 19.6929 21.5683 21.2586 19.8022 21.4245Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <h2 class="mt-4 text-xl font-bold text-white">Espace vert </h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                            distinctio alias voluptatum blanditiis laudantium.
                        </p>
                    </a>

                    <a
                        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                        href="/services/digital-campaigns"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             width="45px"
                             height="47px"
                             color="#FF1493">
                            <path stroke="currentColor" stroke-width="2" d="M12 5.5L12 21.5"/>
                            <path stroke="currentColor" stroke-width="2" d="M20.931 18.8207L12.431 21.3707C12.1499 21.455 11.8501 21.455 11.569 21.3707L3.06898 18.8207C2.4345 18.6304 2 18.0464 2 17.384V3.50802C2 3.00563 2.4843 2.64529 2.96551 2.78965L11.569 5.37069C11.8501 5.45504 12.1499 5.45504 12.431 5.37069L21.0345 2.78965C21.5157 2.64529 22 3.00563 22 3.50802V17.384C22 18.0464 21.5655 18.6304 20.931 18.8207Z"/>
                        </svg>

                        <h2 class="mt-4 text-xl font-bold text-white">Vie pratique</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                            distinctio alias voluptatum blanditiis laudantium.
                        </p>
                    </a>

                    <a
                        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                        href="/services/digital-campaigns"
                    >
                        <?xml version="1.0" encoding="UTF-8"?>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             width="45px"
                             height="47px"
                             color="#FF1493"
                             viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M3.42737 12.1282C6.0613 14.8974 9.36145 18.0353 10.9901 19.5636C11.5573 20.0958 12.4345 20.0983 13.0042 19.5688C14.6358 18.0526 17.9375 14.9367 20.5927 12.1258C22.067 10.565 22.3985 8.27154 21.5136 6.31622C20.1051 3.20402 15.723 2.53786 13.4058 5.04941L11.9946 6.57902L10.5676 5.0324C8.25787 2.52891 3.88911 3.19293 2.48515 6.29514C1.59579 8.26026 1.94028 10.5647 3.42737 12.1282Z"/></svg>




                        <h2 class="mt-4 text-xl font-bold text-white">Aides sociales</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                            distinctio alias voluptatum blanditiis laudantium.
                        </p>
                    </a>

                    <a
                        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                        href="/services/digital-campaigns"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-10 w-10 text-pink-500"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                            />
                        </svg>

                        <h2 class="mt-4 text-xl font-bold text-white">Education</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                            distinctio alias voluptatum blanditiis laudantium.
                        </p>
                    </a>

                    <a
                        class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-pink-500/10"
                        href="/services/digital-campaigns"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             width="45px"
                             height="47px"
                             color="#FF1493"
                             stroke="currentColor"
                             viewBox="0 0 24 24"
                             class="humbleicons hi-calendar">
                            <g xmlns="http://www.w3.org/2000/svg" stroke="currentColor" stroke-width="2">
                        <path stroke-linejoin="round" d="M4 6a1 1 0 011-1h14a1 1 0 011 1v4H4V6z"/>
                    <path stroke-linecap="round" d="M8 6.5v-3M16 6.5v-3"/>
                    <path stroke-linejoin="round" d="M4 10h16v9a1 1 0 01-1 1H5a1 1 0 01-1-1v-9z"/></g></svg>

                        <h2 class="mt-4 text-xl font-bold text-white">Evenementiel</h2>

                        <p class="mt-1 text-sm text-gray-300">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo possimus adipisci
                            distinctio alias voluptatum blanditiis laudantium.
                        </p>
                    </a>
                </div>


            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="script.js"></script>
        <x-simulateur />
    </main>

</x-app-layout>
