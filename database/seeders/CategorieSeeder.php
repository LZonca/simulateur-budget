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
        $c->montant = 507728;
        $c->color = "#FF0000";
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Administration générale";
        $c->montant = 672083;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Sécurité";
        $c->montant = 44230;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Enseignement";
        $c->montant = 809458;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Culture";
        $c->montant = 68233;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Sports et jeunesse (salles)";
        $c->montant = 99931;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Interventions sociales (action sociale employeur)";
        $c->montant = 25346;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Famille";
        $c->montant = 283046;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Logement (parc privé)";
        $c->montant = 1085;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Dépenses de voirie";
        $c->montant = 730023;
        $c->color = $this->randomColor();
        $c->save();

        $c = new Categorie();
        $c->categorie_nom = "Action économique";
        $c->montant = 350;
        $c->color = $this->randomColor();
        $c->save();
    }
    private function randomColor(): string
    {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }
}
