<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\ResultatsSousCategories;
use App\Models\ResultatsSousSousCategories;
use App\Models\SousCategorie;
use App\Models\SousSousCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Simulation;

class SimulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run(): void
     {
         $s = new Simulation();
         $s->simulation_nom = "simulation1";
         $s->simulation_date = now();
         $s->utilisateur_id = 1;
         $s->save();

         $s = new Simulation();
         $s->simulation_nom = "simulation2";
         $s->simulation_date = now();
         $s->utilisateur_id = 1;
         $s->save();

         $s = new Simulation();
         $s->simulation_nom = "simulation3";
         $s->simulation_date = now();
         $s->utilisateur_id = 2;
         $s->save();

         $s = new Simulation();
         $s->simulation_nom = "simulation4";
         $s->simulation_date = now();
         $s->utilisateur_id = 2;
         $s->save();

         $s = new Simulation();
         $s->simulation_nom = "simulation5";
         $s->simulation_date = now();
         $s->utilisateur_id = 2;
         $s->save();

         // Get all simulations, categories, subcategories, and subsubcategories
         $simulations = Simulation::all();
         $categories = Categorie::all();
         $sousCategories = SousCategorie::all();
         $sousSousCategories = SousSousCategorie::all();

         // For each simulation
         foreach ($simulations as $simulation) {
             // For each category
             foreach ($categories as $categorie) {
                 // Create a ResultatsCategories instance
                 ResultatsCategories::factory()->create([
                     'simulation_id' => $simulation->id,
                     'categorie_id' => $categorie->id,
                 ]);
             }

             // For each subcategory
             foreach ($sousCategories as $sousCategorie) {
                 // Create a ResultatsSousCategories instance
                 ResultatsSousCategories::factory()->create([
                     'simulation_id' => $simulation->id,
                     'sous_categorie_id' => $sousCategorie->id,
                 ]);
             }

             // For each subsubcategory
             foreach ($sousSousCategories as $sousSousCategorie) {
                 // Create a ResultatsSousSousCategories instance
                 ResultatsSousSousCategories::factory()->create([
                     'simulation_id' => $simulation->id,
                     'sous_sous_categorie_id' => $sousSousCategorie->id,
                 ]);
             }
         }
     }
}
