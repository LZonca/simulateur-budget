<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCategorie extends Component
{
    use WithFileUploads;

    public $categorie_nom;
    public $categorie_img;
    public $categorie_color;
    public $categorie_budget;
    public $nouvelles_sous_categories = [];
    public $nouvelles_sous_sous_categories = [];
    public $openCategories = [];
    public $openSubCategories = [];

    public function render()
    {
        $categories = Categorie::with('sousCategories')->get();
        $subCategories = Categorie::with('sousCategories.sousSousCategories')->get();
        return view('livewire.add-categorie', compact('categories', 'subCategories'));
    }

    public function addCategory()
    {
        $this->validate([
            'categorie_nom' => 'string|required',
            'categorie_budget' => 'int|required|min:0'
        ]);

        $newCategory = new Categorie;
        $newCategory->categorie_nom = $this->categorie_nom;
        $newCategory->montant = $this->categorie_budget;
        $newCategory->color = $this->categorie_color;
        $newCategory->save();

   

        // Add the new category to the open categories array
        $this->openCategories[] = $newCategory->id;

        $this->reset(['categorie_nom', 'categorie_budget']);
    }

    public function addNewSubCategory($categoryId)
    {
        $this->validate([
            'nouvelles_sous_categories.' . $categoryId => 'required|string',
        ]);

        Categorie::find($categoryId)->sousCategories()->create([
            'sous_categorie_nom' => $this->nouvelles_sous_categories[$categoryId],
        ]);

        $this->reset("nouvelles_sous_categories.$categoryId");
    }

    public function addNewSubSubCategory($subCategoryId)
    {
        $this->validate([
            'nouvelles_sous_sous_categories.' . $subCategoryId => 'required|string',
        ]);

        Categorie::find($subCategoryId)->sousCategories()->create([
            'sous_sous_categorie_nom' => $this->nouvelles_sous_sous_categories[$subCategoryId],
        ]);

        $this->reset("nouvelles_sous_sous_categories.$subCategoryId");
    }

    public function toggleCategory($categoryId)
    {
        if (in_array($categoryId, $this->openCategories)) {
            $this->openCategories = array_diff($this->openCategories, [$categoryId]);
        } else {
            $this->openCategories[] = $categoryId;
        }
    }

    public function toggleSubCategory($subCategoryId)
    {
        if (in_array($subCategoryId, $this->openCategories)) {
            $this->openSubCategories = array_diff($this->openSubCategories, [$subCategoryId]);
        } else {
            $this->openSubCategories[] = $subCategoryId;
        }
    }
}
