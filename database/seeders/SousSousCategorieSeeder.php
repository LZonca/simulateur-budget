<?php

namespace Database\Seeders;

use App\Models\SousSousCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SousSousCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "charges de personnel";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Conventions ou prestations de services ponctuelles";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "fluides, produits, maintenance, etc";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "téléphonie et affranchissement";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "assurance";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "indemnités élus";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "CCAS";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "FPIC";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Pénalités loi SRU";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "taxes";
        $s->sous_categorie_id = 4;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "charges de personnel";
        $s->sous_categorie_id = 9;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Vêtements et matériels professionnels";
        $s->sous_categorie_id = 9;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Logiciels";
        $s->sous_categorie_id = 9;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Véhicule";
        $s->sous_categorie_id = 9;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Activité du service (mises en fourrière/stérilisation chats errants/adhésion Ville Prudente)";
        $s->sous_categorie_id = 9;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Charges de personnel";
        $s->sous_categorie_id = 22;
        $s->save();

        $s = new SousSousCategorie();
        $s->sous_sous_categorie_nom = "Fluides et bâtiment";
        $s->sous_categorie_id = 22;
        $s->save();
    }
}
