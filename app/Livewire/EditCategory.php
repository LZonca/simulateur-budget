<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;

class EditCategory extends Component
{
    public $categorie;
    public $sousCategories = [];
    public $sousSousCategories = [];

    public $color;

    public function mount($categorieId)
    {
        $categorie = Categorie::find($categorieId);
        $this->categorie = $categorie;
        $this->color = $categorie->color;
    }

    public function updateCategorie()
    {
        $this->validate([
            'categorie.categorie_nom' => 'required',
            'categorie.color' => 'required',
            'categorie.montant' => 'required|numeric',
            'sousCategories.*.sous_categorie_nom' => 'sometimes|required',
            'sousCategories.*.montant' => 'sometimes|required|numeric',
            'sousSousCategories.*.*.sous_sous_categorie_nom' => 'sometimes|required',
            'sousSousCategories.*.*.montant' => 'sometimes|required|numeric',
        ]);

        $this->categorie->save();

        foreach ($this->sousCategories as $index => $sousCategorieData) {
            if (!empty($sousCategorieData['sous_categorie_nom']) || !empty($sousCategorieData['montant'])) {
                $sousCategorie = $this->categorie->sousCategories[$index];
                $sousCategorie->update($sousCategorieData);

                foreach ($this->sousSousCategories[$index] as $subIndex => $sousSousCategorieData) {
                    if (!empty($sousSousCategorieData['sous_sous_categorie_nom']) || !empty($sousSousCategorieData['montant'])) {
                        $sousSousCategorie = $sousCategorie->sousSousCategories[$subIndex];
                        $sousSousCategorie->update($sousSousCategorieData);
                    }
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.edit-category');
    }
}
