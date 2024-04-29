<?php

namespace App\Livewire;

use App\Models\ResultatsCategories;
use App\Models\ResultatsSousCategories;
use App\Models\ResultatsSousSousCategories;
use App\Models\Simulation;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

use App\Models\Categorie;
use App\Models\sousCategorie;
use App\Models\sousSousCategorie;
use Mary\Traits\Toast;

class Simulateur extends Component
{
    use Toast;
    public $values = [];
    public $isLoading = false; // Add a new property for the loading state

    public $initialTotalBudget;
    public $categories;
    public $sousCategories;
    public $sousSousCategories;
    public $resultChart;
    public string $nomResultat;

    public $total;

    public function render()
    {
        return view('livewire.simulateur');
    }

    public function mount()
    {
        $this->nomResultat = '';

        $this->categories = Categorie::all();
        $this->initialTotalBudget = 0; // Initialize the initial total budget to 0

        foreach ($this->categories as $category) {
            $this->values['categories'][$category->id] = $category->montant;
            $this->initialTotalBudget += $category->montant; // Add the montant of the current category to the initial total budget

            foreach ($category->sousCategories as $subCategory) {
                $this->values['subCategories'][$subCategory->id] = $subCategory->montant;
                foreach ($subCategory->sousSousCategories as $subSubCategory) {
                    $this->values['subSubCategories'][$subSubCategory->id] = $subSubCategory->montant;
                }
            }
        }

        $this->resultChart = [
            'type' => 'pie',
            'options' => [
                'responsive' => true,
                'maintainAspectRatio' => false,
                'plugins' => [
                    'legend' => [
                        'position' => 'top',
                    ],
                    'title' => [
                        'display' => true,
                        'text' => 'Vos résultats'
                    ],
                ],
            ],
        ];

        $this->setupChart();
    }

    public function setupChart()
    {
        $labels = [];
        $data = [];
        foreach ($this->categories as $category) {
            $labels[] = $category->categorie_nom;
            $data[] = $this->values['categories'][$category->id];
        }

        $this->resultChart['data']['labels'] = $labels;
        $this->resultChart['data']['datasets'][0]['data'] = $data;
    }
    public function saveSimulation()
    {
        $validator = Validator::make(
            ['nomResultat' => $this->nomResultat], // Add the data to validate
            ['nomResultat' => 'required|max:255'],
        );

        if ($validator->fails()) { // Check if the validation fails
            $this->error($validator->errors()->first(), 'error');
        }
        $this->isLoading = true; // Set the loading state to true at the start of the method

        $currentSum = array_sum($this->values['categories']);

        // Calculate the sum of the initial values
        $initialSum = 0;
        foreach ($this->values['categories'] as $id => $value) {
            $initialSum += $this->getInitialValue($id, 'categories');
        }

        // If the sum of the current values is greater than the sum of the initial values, return early
        if ($currentSum > $initialSum) {
            $this->warning('The sum of the current values is greater than the sum of the initial values.', 'Warning');
            return;
        }

        $simulation = new Simulation;
        $simulation->simulation_nom = $this->nomResultat;
        $simulation->utilisateur_id = auth()->id();
        $simulation->simulation_date = now();
        $simulation->available_budget = $this->getAvailableBudget();

        // Save the simulation to the database
        try {
            $simulation->save();
            $this->success('Simulation enregistrée avec succès.', 'Succès');
        } catch (\Exception $e) {
            $this->error('Erreur lors de sauvegarde de la simulation: ' . $e->getMessage(), 'Erreur');

            return;
        }

        // Save the results for each category, subcategory, and subsubcategory
        foreach ($this->values['categories'] as $id => $value) {
            $result = new ResultatsCategories;
            $result->simulation_id = $simulation->id;
            $result->categorie_id = $id;
            $result->resultat = $value;
            $result->save();

            foreach ($this->values['subCategories'] as $subId => $subValue) {
                $resultSub = new ResultatsSousCategories;
                $resultSub->simulation_id = $simulation->id;
                $resultSub->sous_categorie_id = $subId;
                $resultSub->resultat = $subValue;
                $resultSub->resultat_categorie_id = $result->id; // Set the resultat_categorie_id
                $resultSub->save();

                foreach ($this->values['subSubCategories'] as $subSubId => $subSubValue) {
                    $resultSubSub = new ResultatsSousSousCategories;
                    $resultSubSub->simulation_id = $simulation->id;
                    $resultSubSub->sous_sous_categorie_id = $subSubId;
                    $resultSubSub->resultat = $subSubValue;
                    $resultSubSub->resultat_sous_categorie_id = $resultSub->id; // Set the resultat_sous_categorie_id
                    $resultSubSub->save();
                }
            }
        }
        $this->isLoading = false; // Set the loading state back to false at the end of the method

        $this->redirectRoute('resultat', ['simulation' => $simulation->id]);

    }

    public function getDifference($id, $type)
    {
        $initialValue = $this->getInitialValue($id, $type);
        $currentValue = $this->values[$type][$id];
        return $currentValue - $initialValue;
    }
    public function getAvailableBudget()
    {
        $currentSum = array_sum($this->values['categories']);
        return $this->initialTotalBudget - $currentSum;
    }
    public function increaseLevel($id, $type, $value)
    {
        $newValue = $this->values[$type][$id] + $value;
        $newTotalBudget = array_sum($this->values['categories']) + ($type === 'categories' ? $value : 0);

        if ($newTotalBudget > $this->initialTotalBudget) {
            $this->warning('Impossible d\'augmanter ce budget', 'Le nouveau budget dépasse le budget total de la mairie.');
            return; // Do not increase the value if the new total budget is above the initial total budget
        }

        $this->values[$type][$id] = max($newValue, 0); // Ensure the value is above or equal to 0

        if ($type === 'subCategories' || $type === 'subSubCategories') {
            $parentCategory = $type === 'subCategories' ? sousCategorie::find($id) : sousSousCategorie::find($id)->sousCategorie;
            $this->values['categories'][$parentCategory->categorie_id] += $value;
        }

        $this->setupChart();
        $this->getDifference($id, $type);
    }

    public function decreaseLevel($id, $type, $value)
    {
        $newValue = $this->values[$type][$id] - $value;
        if ($newValue < 0) {
            $value += $newValue; // Adjust the value to the maximum possible decrease
            $newValue = 0; // Set the new value to 0 if it's less than 0
        }
        $this->values[$type][$id] = $newValue;

        if ($type === 'subCategories' || $type === 'subSubCategories') {
            $parentCategory = $type === 'subCategories' ? sousCategorie::find($id) : sousSousCategorie::find($id)->sousCategorie;
            $this->values['categories'][$parentCategory->categorie_id] -= $value;
            if ($this->values['categories'][$parentCategory->categorie_id] < 0) {
                $this->values['categories'][$parentCategory->categorie_id] = 0;
            }
        } elseif ($type === 'categories') {
            if ($this->values['categories'][$id] < 0) {
                $this->values['categories'][$id] = 0;
            }
        }

        $this->getDifference($id, $type);
        $this->setupChart();
    }
    private function getInitialValue($id, $type)
    {
        // Assuming you have a method to get the initial value for each type
        switch ($type) {
            case 'categories':
                return Categorie::find($id)->montant;
            case 'subCategories':
                return sousCategorie::find($id)->montant;
            case 'subSubCategories':
                return sousSousCategorie::find($id)->montant;
        }
    }
}
