<html>
<head>
    <title>Simulation {{$simulation->simulation_nom}}</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h1>Simulation {{$simulation->simulation_nom}}</h1>
<table class="table-auto w-full">
    <thead>
    <tr>
        <th>Nom de la catégorie</th>
        <th>Montant alloué original</th>
        <th>Montant alloué modifié</th>
        <th>Différence</th>
    </tr>
    </thead>
    <tbody>
    @foreach($simulation->resultatsCategories as $result)
        <tr>
            <td>{{ $result->categorie->categorie_nom }}</td>
            <td>{{ $result->categorie->montant }}</td>
            <td>{{ $result->resultat }}</td>
            <td>{{ $result->getDifference() }}</td>
        </tr>
        {{--@foreach($result->resultatsSousCategories as $subResult)
            <tr>
                <td>--- {{ $subResult->sousCategorie->sous_categorie_nom }}</td>
                <td>{{ $subResult->sousCategorie->montant }}</td>
                <td>{{ $subResult->resultat }}</td>
                <td>{{ $subResult->getDifference() }}</td>
            </tr>
            --}}{{--@foreach($subResult->resultatsSousSousCategories as $subSubResult)
                <tr>
                    <td>{{ $subSubResult->sousSousCategorie->sous_sous_categorie_nom }}</td>
                    <td>{{ $subSubResult->sousSousCategorie->montant }}</td>
                    <td>{{ $subSubResult->resultat }}</td>
                    <td>{{ $subSubResult->getDifference() }}</td>
                </tr>
            @endforeach--}}{{--
        @endforeach--}}
    @endforeach
    </tbody>
</table>
</body>
</html>
