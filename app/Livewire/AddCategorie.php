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
    public $nouvelles_sous_categories = [];
    public $openCategories = [];

    public function render()
    {
        $categories = Categorie::with('sousCategories')->get();
        return view('livewire.add-categorie', compact('categories'));
    }

    public function addCategory()
    {
        $this->validate([
            'categorie_img' => 'image|max:1024',
            'categorie_nom' => 'string|required',
        ]);

        if ($this->categorie_img) {
            $path = $this->categorie_img->store('categorie_img', 'public');
        } else {
            $path = null;
        }

        $newCategory = Categorie::create([
            'categorie_nom' => $this->categorie_nom,
            'categorie_img' => $path,
        ]);

        // Add the new category to the open categories array
        $this->openCategories[] = $newCategory->id;

        $this->reset(['categorie_nom', 'categorie_img']);
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

    public function toggleCategory($categoryId)
    {
        if (in_array($categoryId, $this->openCategories)) {
            $this->openCategories = array_diff($this->openCategories, [$categoryId]);
        } else {
            $this->openCategories[] = $categoryId;
        }
    }
}
