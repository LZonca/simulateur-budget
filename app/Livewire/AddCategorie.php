<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;

// Livewire Component
class AddCategorie extends Component
{
    public $categorie_nom;
    public $categorie_img;
    public $nouvelles_sous_categories = [];

    public function render()
    {
        $categories = Categorie::with('sousCategories')->get();
        return view('livewire.add-categorie', compact('categories'));
    }

    public function addCategory()
    {
        Categorie::create([
            'categorie_nom' => $this->categorie_nom,
            'categorie_img' => $this->categorie_img,
        ]);

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
}
