{{-- resources/views/livewire/add-categorie.blade.php --}}
<div>
    <div>
        <input type="text" wire:model="categorie_nom" placeholder="Nouvelle catégorie">
        <input type="text" wire:model="categorie_img" placeholder="URL de l'image de catégorie">
        <button wire:click="addCategory">Créer Catégorie</button>
    </div>

    @if(!$categories->isEmpty())
        <div>
            <input type="text" wire:model="sous_categorie_nom" placeholder="Nouvelle sous-catégorie">
            <button wire:click="addSubCategory({{ $categories[0]->id }})">Ajouter Sous-catégorie</button>
        </div>
    @endif

    @foreach($categories as $category)
        <div>
            <h2>{{ $category->categorie_nom }}</h2>
            @foreach($category->sousCategories as $subCategory)
                <p class="ml-4">{{ $subCategory->sous_categorie_nom }}</p>
            @endforeach
        </div>
    @endforeach
</div>
