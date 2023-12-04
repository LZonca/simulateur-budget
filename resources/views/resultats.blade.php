<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold mt-12 text-center">Résultats obtenu</h1>


    </x-slot>
    <main class="max-w-6xl my-14 p-6 mx-auto bg-white shadow-md">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="script.js"></script>
        <x-simulateur />
    </main>
    <x-footer/>


        {{-- <div style="width: 400px; height: 400px;">
            <canvas id="camembertChart"></canvas>
        </div>



        <div>
            <label for="inputRangeA">Catégorie A :</label>
            <input type="range" id="inputRangeA" min="0" max="100" step="1" value="30" data-index="0">
            <span id="rangeValueA">30%</span>
        </div>

        <div>
            <label for="inputRangeB">Catégorie B :</label>
            <input type="range" id="inputRangeB" min="0" max="100" step="1" value="40" data-index="1">
            <span id="rangeValueB">40%</span>
        </div>

        <div>
            <label for="inputRangeC">Catégorie C :</label>
            <input type="range" id="inputRangeC" min="0" max="100" step="1" value="15" data-index="2">
            <span id="rangeValueC">15%</span>
        </div>

        <div>
            <label for="inputRangeD">Catégorie D :</label>
            <input type="range" id="inputRangeD" min="0" max="100" step="1" value="15" data-index="3">
            <span id="rangeValueD">15%</span>
        </div> --}}

        <button onclick="enregistrer()">Enregistrer</button>

        <script>
            var valeurs = [30, 40, 15, 15];
            var total = valeurs.reduce(function(a, b) {
                return a + b;
            }, 0);

            function mettreAJourGraphique() {
                var ajustement = 100 / total;
                valeurs = valeurs.map(function(val) {
                    return Math.round(val * ajustement);
                });
                total = valeurs.reduce(function(a, b) {
                    return a + b;
                }, 0);

                ['A', 'B', 'C', 'D'].forEach(function(categorie) {
                    var index = document.getElementById('inputRange' + categorie).getAttribute('data-index');
                    var pourcentage = Math.round((valeurs[index] / total * 100));
                    document.getElementById('rangeValue' + categorie).innerText = pourcentage + '%';

                    // Mettre à jour la position du curseur
                    document.getElementById('inputRange' + categorie).value = pourcentage;
                });

                var pourcentages = valeurs.map(function(val) {
                    return (val / total * 100).toFixed(2);
                });
                var labels = pourcentages.map(function(percentage, index) {
                    return 'Catégorie ' + String.fromCharCode(65 + index) + ' (' + percentage + '%)';
                });

                camembertChart.data.labels = labels;
                camembertChart.data.datasets[0].data = valeurs;
                camembertChart.update();
            }

            ['A', 'B', 'C', 'D'].forEach(function(categorie) {
                var inputRange = document.getElementById('inputRange' + categorie);
                var rangeValue = document.getElementById('rangeValue' + categorie);

                inputRange.addEventListener('input', function() {
                    var inputValue = this.value;
                    var index = this.getAttribute('data-index');
                    rangeValue.innerText = inputValue + '%';
                    valeurs[index] = parseInt(inputValue);
                    mettreAJourGraphique();
                });
            });

            var ctx = document.getElementById('camembertChart').getContext('2d');
            var camembertChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [],
                    datasets: [{
                        data: [],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                        ],
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Répartition des catégories',
                    }
                }
            });

            // Charger initialement les données
            mettreAJourGraphique();

            function enregistrer() {
                // Envoyer les données au serveur avec AJAX
                $.ajax({
                    type: 'POST',
                    url: 'enregistrer.php',
                    data: {
                        valeurs: valeurs
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }
        </script>



</x-app-layout>
