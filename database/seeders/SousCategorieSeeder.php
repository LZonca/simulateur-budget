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
        $s->montant = 0;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "opérations ordre";
        $s->categorie_id = 1;
        $s->montant = 0;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "amortissement";
        $s->categorie_id = 1;
        $s->montant = 185877;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Administration générale";
        $s->categorie_id = 2;
        $s->montant = 582483;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Communication";
        $s->categorie_id = 2;
        $s->montant = 34900;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fêtes et cérémonies";
        $s->categorie_id = 2;
        $s->montant = 41273;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Subventions";
        $s->categorie_id = 2;
        $s->montant = 19602;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Cimetière";
        $s->categorie_id = 2;
        $s->montant = 569;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Police municipale";
        $s->categorie_id = 3;
        $s->montant = 43728;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "contribution incendie";
        $s->categorie_id = 3;
        $s->montant = 2405;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges de personnel";
        $s->categorie_id = 4;
        $s->montant = 318567;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Restauration scolaire";
        $s->categorie_id = 4;
        $s->montant = 87464;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fournitures scolaires";
        $s->categorie_id = 4;
        $s->montant = 23896;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides et produits entretien";
        $s->categorie_id = 4;
        $s->montant = 58478;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Matériel (blouses/pharmacie/dictionnaires/pronote/petit matériel de protection)";
        $s->categorie_id = 4;
        $s->montant = 2856;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Photocopieurs";
        $s->categorie_id = 4;
        $s->montant = 3068;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Transports bus + tennis + animations";
        $s->categorie_id = 4;
        $s->montant = 5260;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Bâtiments";
        $s->categorie_id = 4;
        $s->montant = 17154;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Location portakabin";
        $s->categorie_id = 4;
        $s->montant = 48842;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Participation autres écoles";
        $s->categorie_id = 4;
        $s->montant = 242601;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Frais emprunt";
        $s->categorie_id = 4;
        $s->montant = 72877;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Médiathèque";
        $s->categorie_id = 5;
        $s->montant = 52803;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Activité du service";
        $s->categorie_id = 5;
        $s->montant = 14128;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Bâtiments";
        $s->categorie_id = 6;
        $s->montant = 8767;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides";
        $s->categorie_id = 6;
        $s->montant = 11176;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Jeunesse (centres aérés extérieurs et CMJ)";
        $s->categorie_id = 6;
        $s->montant = 3370;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges de personnel (75% Marielle et 75 % Alexis)";
        $s->categorie_id = 6;
        $s->montant = 46878;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Chèque déjeuner et cotisation CNAS";
        $s->categorie_id = 7;
        $s->montant = 21590;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Centre de loisirs et RPE";
        $s->categorie_id = 8;
        $s->montant = 243020;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides";
        $s->categorie_id = 8;
        $s->montant = 1234;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Bâtiments";
        $s->categorie_id = 8;
        $s->montant = 5521;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges de personnel";
        $s->categorie_id = 10;
        $s->montant = 311693;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Fluides";
        $s->categorie_id = 10;
        $s->montant = 29487;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Charges SYDER";
        $s->categorie_id = 10;
        $s->montant = 601041;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "Services et aménagements urbains";
        $s->categorie_id = 10;
        $s->montant = 125204;
        $s->save();

        $s = new SousCategorie();
        $s->sous_categorie_nom = "conso marché";
        $s->categorie_id = 11;
        $s->montant = 9076;
        $s->save();


    }
}
