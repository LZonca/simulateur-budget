<?php

namespace Database\Seeders;

use App\Models\SousCategorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SousCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s = new SousCategorie();
        $s->sous_categorie_nom = "charges de personnel";
        $s->categorie_id = 1;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "opérations ordre";
        $s->categorie_id = 1;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "amortissement";
        $s->categorie_id = 1;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Administration générale";
        $s->categorie_id = 2;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Communication";
        $s->categorie_id = 2;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fêtes et cérémonies";
        $s->categorie_id = 2;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Subventions";
        $s->categorie_id = 2;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Cimetière";
        $s->categorie_id = 2;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Police municipale";
        $s->categorie_id = 3;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "contribution incendie";
        $s->categorie_id = 3;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges de personnel";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Restauration scolaire";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fournitures scolaires";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides et produits entretien";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Matériel (blouses/pharmacie/dictionnaires/pronote/petit matériel de protection)";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Photocopieurs";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Transports bus + tennis + animations";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Bâtiments";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Location portakabin";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Participation autres écoles";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Frais emprunt";
        $s->categorie_id = 4;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Médiathèque";
        $s->categorie_id = 5;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Activité du service";
        $s->categorie_id = 5;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Bâtiments";
        $s->categorie_id = 6;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides";
        $s->categorie_id = 6;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Jeunesse (centres aérés extérieurs et CMJ)";
        $s->categorie_id = 6;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges de personnel (75% Marielle et 75 % Alexis)";
        $s->categorie_id = 6;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Chèque déjeuner et cotisation CNAS";
        $s->categorie_id = 7;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Centre de loisirs et RPE";
        $s->categorie_id = 8;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides";
        $s->categorie_id = 8;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Bâtiments";
        $s->categorie_id = 8;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges de personnel";
        $s->categorie_id = 10;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides";
        $s->categorie_id = 10;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges SYDER";
        $s->categorie_id = 10;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Services et aménagements urbains";
        $s->categorie_id = 10;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "conso marché";
        $s->categorie_id = 11;
        $s->save();


    }
}
