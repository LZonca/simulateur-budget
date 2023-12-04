<?php

namespace App\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithFileUploads;

// Livewire Component
class AddCategorie extends Component
{
    use WithFileUploads;
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
        $this->validate([
            'categorie_img' => 'image|max:1024',
            "categorie_nom" => 'string|required',
            
        ]);
        if($this->categorie_img)
             $path = $this->categorie_img->store('categorie_img', 'public');
        else{
            $path = Null;
           
        }

        Categorie::create([
            'categorie_nom' => $this->categorie_nom,
            'categorie_img' => $path,
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
