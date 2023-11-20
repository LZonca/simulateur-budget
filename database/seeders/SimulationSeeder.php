<?php

namespace Database\Seeders;

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
        $s->simulations_nom	= "simulation1";
        $s->simulations_date = fake()->date('Y-m-d H:i:s');
        $s->simulations_resultats = "resultats1";
        $s->utilisateur_id = 1;
        $s->save();

        $s = new Simulation();
        $s->simulations_nom	= "simulation2";
        $s->simulations_date = fake()->date('Y-m-d H:i:s');
        $s->simulations_resultats = "resultats2";
        $s->utilisateur_id = 1;
        $s->save();

        $s = new Simulation();
        $s->simulations_nom	= "simulation3";
        $s->simulations_date = fake()->date('Y-m-d H:i:s');
        $s->simulations_resultats = "resultats3";
        $s->utilisateur_id = 2;
        $s->save();

        $s = new Simulation();
        $s->simulations_nom	= "simulation4";
        $s->simulations_date = fake()->date('Y-m-d H:i:s');
        $s->simulations_resultats = "resultats4";
        $s->utilisateur_id = 2;
        $s->save();

        $s = new Simulation();
        $s->simulations_nom	= "simulation5";
        $s->simulations_date = fake()->date('Y-m-d H:i:s');
        $s->simulations_resultats = "resultats5";
        $s->utilisateur_id = 2;
        $s->save();

    }
}
