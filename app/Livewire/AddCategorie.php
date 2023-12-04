<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;

// Livewire Component
class AddCategorie extends Component
{
    public $categorie_nom;
    public $categorie_img;
    public $sous_categorie_nom;
    public $categories; // Assurez-vous que cette propriété est déclarée

    public function mount()
    {
        $this->categories = Categorie::with('sousCategories')->get();
    }

    public function render()
    {
        return view('livewire.add-categorie');
    }

    public function addCategory()
    {
        Categorie::create([
            'categorie_nom' => $this->categorie_nom,
            'categorie_img' => $this->categorie_img,
        ]);

        $this->reset(['categorie_nom', 'categorie_img']);
        $this->resetCategories();
    }

    public function addSubCategory($categoryId)
    {
        $this->validate([
            'sous_categorie_nom' => 'required|string',
        ]);

        Categorie::find($categoryId)->sousCategories()->create([
            'sous_categorie_nom' => $this->sous_categorie_nom,
        ]);

        $this->reset(['sous_categorie_nom']);
        $this->resetCategories();
    }

    private function resetCategories()
    {
        $this->categories = Categorie::with('sousCategories')->get();
    }
}
