<?php

namespace App\Livewire;

use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\SousSousCategorie;
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
    public $nouvelles_sous_categories_montant = [];
    public $nouvelles_sous_sous_categories_montant = [];
    public $openCategories = [];
    public $openSubCategories = [];

    public $editingItem = null;
    public $showCategorieModal = false;
    public $showSubCategorieModal = false;
    public $showSubSubCategorieModal = false;

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
            'categorie_budget' => 'int|required|min:0',
            'categorie_color' => 'string|required',
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
            'nouvelles_sous_categories_montant.' . $categoryId => 'required|integer|min:0',
        ]);

        SousCategorie::create([
            'sous_categorie_nom' => $this->nouvelles_sous_categories[$categoryId],
            'montant' => $this->nouvelles_sous_categories_montant[$categoryId],
            'categorie_id' => $categoryId,
        ]);

        $this->reset(["nouvelles_sous_categories.$categoryId", "nouvelles_sous_categories_montant.$categoryId"]);
    }

    public function addNewSubSubCategory($subCategoryId)
    {
        $this->validate([
            'nouvelles_sous_sous_categories.' . $subCategoryId => 'required|string',
            'nouvelles_sous_sous_categories_montant.' . $subCategoryId => 'required|integer|min:0',
        ]);



        SousSousCategorie::create([
            'sous_sous_categorie_nom' => $this->nouvelles_sous_sous_categories[$subCategoryId],
            'montant' => $this->nouvelles_sous_sous_categories_montant[$subCategoryId],
            'sous_categorie_id' => $subCategoryId,
        ]);

        $this->reset(["nouvelles_sous_sous_categories.$subCategoryId", "nouvelles_sous_sous_categories_montant.$subCategoryId"]);
    }

    public function deleteCategory($categoryId)
    {
        $category = Categorie::find($categoryId);
        if ($category) {
            foreach ($category->sousCategories as $subCategory) {
                $subCategory->sousSousCategories()->delete();
            }
            $category->sousCategories()->delete();
            $category->delete();
        }
    }

    public function deleteSubCategory($subCategoryId)
    {
        $subCategory = SousCategorie::find($subCategoryId);
        if ($subCategory) {
            $subCategory->sousSousCategories()->delete();
            $subCategory->delete();
        }
    }

    public function deleteSubSubCategory($subSubCategoryId)
    {
        $subSubCategory = SousSousCategorie::find($subSubCategoryId);
        if ($subSubCategory) {
            $subSubCategory->delete();
        }
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
        if (in_array($subCategoryId, $this->openSubCategories)) {
            $this->openSubCategories = array_diff($this->openSubCategories, [$subCategoryId]);
        } else {
            $this->openSubCategories[] = $subCategoryId;
        }
    }

    public function editCategory($categoryId)
    {
        $this->editingItem = Categorie::find($categoryId);
        $this->toggleCategorieModal();
    }

    public function editSubCategory($subCategoryId)
    {
        $this->editingItem = SousCategorie::find($subCategoryId);
        $this->toggleSubCategorieModal();
    }

    public function editSubSubCategory($subSubCategoryId)
    {
        $this->editingItem = SousSousCategorie::find($subSubCategoryId);
        $this->toggleSubSubCategorieModal();
    }
    public function updateCategorie($name, $amount, $color)
    {
        if ($this->editingItem) {
            $this->editingItem->update([
                'categorie_nom' => $name,
                'montant' => $amount,
                'color' => $color,
            ]);
        }

        $this->showModal = false;
        $this->editingItem = null;
    }

    public function toggleCategorieModal()
    {
        $this->showCategorieModal = !$this->showCategorieModal;
    }

    public function toggleSubCategorieModal()
    {
        $this->showSubCategorieModal = !$this->showSubCategorieModal;
    }

    public function toggleSubSubCategorieModal()
    {
        $this->showSubSubCategorieModal = !$this->showSubSubCategorieModal;
    }
}
