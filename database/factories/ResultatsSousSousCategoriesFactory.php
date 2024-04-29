<?php
// ResultatsSousSousCategoriesFactory.php
namespace Database\Factories;

use App\Models\ResultatsSousSousCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultatsSousSousCategoriesFactory extends Factory
{
    protected $model = ResultatsSousSousCategories::class;

    public function definition()
    {
        return [
            'simulation_id' => 1, // assuming a simulation with id 1 exists
            'sous_sous_categorie_id' => 1, // assuming a subsubcategory with id 1 exists
            'resultat' => $this->faker->randomFloat(2, 0, 1000), // generates a random float number between 0 and 1000 with 2 decimal places
        ];
    }
}
