<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $c = new Categorie();
        $c->categorie_nom = "Non ventilable";
        $c->categorie_img = null;
        $c->montant = 507728;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Administration générale";
        $c->categorie_img = null;
        $c->montant = 672083;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Sécurité";
        $c->categorie_img = null;
        $c->montant = 44230;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Enseignement";
        $c->categorie_img = null;
        $c->montant = 809458;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Culture";
        $c->categorie_img = null;
        $c->montant = 68233;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Sports et jeunesse (salles)";
        $c->categorie_img = null;
        $c->montant = 99931;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Interventions sociales (action sociale employeur)";
        $c->categorie_img = null;
        $c->montant = 25346;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Famille";
        $c->categorie_img = null;
        $c->montant = 283046;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Logement (parc privé)";
        $c->categorie_img = null;
        $c->montant = 1085;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Dépenses de voirie";
        $c->categorie_img = null;
        $c->montant = 730023;
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Action économique";
        $c->categorie_img = null;
        $c->montant = 350;
        $c->save();
    }
}
