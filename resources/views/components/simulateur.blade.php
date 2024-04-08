<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulateur</title>
    <!-- Inclure les bibliothèques JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Balise Livewire -->
    <x-mary-range wire:model="level" label="Select a level" hint="Greater than 10." />

    <!-- Canvas pour le graphique -->
    <div style="width: 400px; height: 400px;">
        <canvas id="camembertChart"></canvas>
    </div>

<!-- Valeurs indépendantes avec boutons +/- 10% -->
<div>
    <label for="level">Level:</label>
    <input type="number" id="level" wire:model="level" class="value-input">
    <button wire:click="adjustLevel(10)">+10%</button>
    <button wire:click="adjustLevel(-10)">-10%</button>
</div>

<div>
    <label for="level1">Catégorie B :</label>
    <input type="number" id="level1" wire:model="level1" class="value-input">
    <button wire:click="adjustLevel1(10)">+10%</button>
    <button wire:click="adjustLevel1(-10)">-10%</button>
</div>

<div>
    <label for="level2">Catégorie C :</label>
    <input type="number" id="level2" wire:model="level2" class="value-input">
    <button wire:click="adjustLevel2(10)">+10%</button>
    <button wire:click="adjustLevel2(-10)">-10%</button>
</div>

<div>
    <label for="level3">Catégorie D :</label>
    <input type="number" id="level3" wire:model.live="level3" class="value-input" disabled>
    <!-- Le bouton +/- 10% pour la catégorie D est désactivé c elle est désactivée -->
</div>





    <!-- Affichage des valeurs en temps réel -->
    <div id="barValues">
        <!-- Les valeurs des barres seront affichées ici en temps réel -->
    </div>

    <!-- Bouton d'enregistrement -->
    <button onclick="enregistrer()">Enregistrer</button>

    <!-- Script JavaScript -->
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Récupérer les valeurs initiales à partir de Livewire
    var levelInitial = {{ $level }};
    var level1Initial = {{ $level1 }};
    var level2Initial = {{ $level2 }};
    var level3Initial = {{ $level3 }};

    // Mettre à jour le graphique et les valeurs
    function mettreAJourGraphique() {
        // Mettre à jour le graphique ici (si nécessaire)
    }

    // Gérer le déplacement des curseurs de barre
    ['B', 'C', 'D'].forEach(function (categorie) {
        var inputRange = document.getElementById('inputRange' + categorie);
        var rangeValue = document.getElementById('rangeValue' + categorie);

        // Initialiser la valeur de la barre à partir de Livewire
        var initialValue;
        switch (categorie) {
            case 'B':
                initialValue = level1Initial;
                break;
            case 'C':
                initialValue = level2Initial;
                break;
            case 'D':
                initialValue = level3Initial;
                break;
            default:
                initialValue = 50; // Valeur par défaut
        }

        // Définir la valeur initiale
        inputRange.value = initialValue;
        rangeValue.innerText = initialValue + '€';

        // Gérer les événements de modification
        inputRange.addEventListener('input', function () {
            var inputValue = parseInt(this.value);
            rangeValue.innerText = inputValue + '€';
            mettreAJourGraphique();
        });
    });
});



    </script>
</body>

</html>
