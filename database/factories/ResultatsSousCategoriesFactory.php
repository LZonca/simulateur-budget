<?php
// ResultatsSousCategoriesFactory.php
namespace Database\Factories;

use App\Models\ResultatsSousCategories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultatsSousCategoriesFactory extends Factory
{
    protected $model = ResultatsSousCategories::class;

    public function definition()
    {
        return [
            'simulation_id' => 1, // assuming a simulation with id 1 exists
            'sous_categorie_id' => 1, // assuming a subcategory with id 1 exists
            'resultat' => $this->faker->randomFloat(2, 0, 1000), // generates a random float number between 0 and 1000 with 2 decimal places
        ];
    }
}
