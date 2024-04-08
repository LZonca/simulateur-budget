{{-- resources/views/livewire/add-categorie.blade.php --}}
<div>
    <div class="max-w-6xl my-14 p-6 mx-auto items-stretch justify-center bg-white shadow-md text-center rounded-lg flex flex-col gap-2 ">
        <x-mary-input type="text" wire:model="categorie_nom" placeholder="Nouvelle catégorie" class="glass"/>
        <x-mary-input type="text" wire:model="categorie_budget" placeholder="Montant initial du budget" class="glass w-fit" />
        <x-mary-button wire:click="addCategory" label="Créer Catégorie" class="p-10 m-10 border bg-black text-white rounded-lg py-3 font-semibold hover:bg-green-600" />
    </div>
@foreach($categories as $category)
    <div class="max-w-6xl mx-auto mt-10 bg-white shadow-md text-center rounded-lg">
        <div wire:click="toggleCategory({{ $category->id }})" class="max-w-6xl p-6 mx-auto bg-green-300 shadow-xl text-center flex justify-between items-center cursor-pointer transition  rounded-lg ">
            <span>{{ $category->categorie_nom }}</span>
            <span class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                    @if(in_array($category->id, $openCategories))
                        <polyline points="18 15 12 9 6 15"></polyline>
                    @else
                        <polyline points="6 9 12 15 18 9"></polyline>
                    @endif
                </svg>
            </span>
        </div>

        @if(in_array($category->id, $openCategories))
            <div>
                @foreach($category->sousCategories as $subCategory)
                        <div wire:click="toggleCategory({{ $category->id }})" class="max-w-6xl p-6 mx-auto bg-green-300 shadow-xl text-center flex justify-between items-center cursor-pointer transition  rounded-lg ">
                            <span>{{ $category->categorie_nom }}</span>
                            <span class="ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                @if(in_array($category->id, $openCategories))
                                    <polyline points="18 15 12 9 6 15"></polyline>
                                @else
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                @endif
                            </svg>
                        </span>
                    </div>
                    {{ $subCategory->sous_categorie_nom }}
                @endforeach

                <div class="ml-4">
                    <input type="text" wire:model="nouvelles_sous_categories.{{ $category->id }}" placeholder="Nouvelle sous-catégorie">
                    <button wire:click="addNewSubCategory({{ $category->id }})" class="p-10 m-10 border bg-black text-white rounded-lg py-3 font-semibold hover:bg-green-600">
                        Ajouter Sous-catégorie
                    </button>

                </div>
            </div>
        @endif
    </div>
@endforeach



</div>
