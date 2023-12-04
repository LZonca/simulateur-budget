{{-- resources/views/livewire/add-categorie.blade.php --}}
<div>
    <div class="max-w-6xl my-14 p-6 mx-auto bg-white shadow-md text-center">
        <input type="text" wire:model="categorie_nom" placeholder="Nouvelle catégorie"><br>
        <input type="file" wire:model="categorie_img" placeholder="URL de l'image de catégorie" class="m-10"><br>
        <button wire:click="addCategory" class="p-10 m-10 border bg-black text-white rounded-lg py-3 font-semibold hover:bg-green-600">Créer Catégorie</button>
    </div>

    @foreach($categories as $category)

            <h2 class="max-w-6xl my-5 p-6 mx-auto bg-white shadow-xl text-center hover:bg-green-300">{{ $category->categorie_nom }}</h2>
            @foreach($category->sousCategories as $subCategory)
                <p class="ml-10 my-10 mx-auto bg-white shadow-xl text-center hover:bg-green-300">{{ $subCategory->sous_categorie_nom }}</p>
            @endforeach

            <div class="ml-4">
                <input type="text" wire:model="nouvelles_sous_categories.{{ $category->id }}" placeholder="Nouvelle sous-catégorie">
                <button wire:click="addNewSubCategory({{ $category->id }})">Ajouter Sous-catégorie</button>
            </div>
        </div>
    @endforeach
</div>
