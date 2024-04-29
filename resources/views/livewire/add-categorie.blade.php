{{-- resources/views/livewire/add-categorie.blade.php --}}
<div>
    <div class="max-w-6xl my-14 p-6 mx-auto items-stretch justify-center bg-white shadow-md text-center rounded-lg flex flex-col gap-2 ">
        <x-mary-input type="text" wire:model="categorie_nom" placeholder="Nouvelle catégorie" class="glass"/>
        <x-mary-input type="text" wire:model="categorie_budget" placeholder="Montant initial du budget" class="glass w-fit" />
        <x-mary-colorpicker wire:model="categorie_color" placeholder="Couleur de la catégorie" class="glass" />
        <x-mary-button wire:click="addCategory" label="Créer Catégorie" class="p-10 m-10 border bg-black text-white rounded-lg py-3 font-semibold hover:bg-green-600" />
    </div>
@foreach($categories as $category)
    <div class="max-w-6xl mx-auto mt-10 bg-white shadow-md text-center rounded-lg">
        <div wire:click="toggleCategory({{ $category->id }})" class="max-w-6xl p-6 mx-auto  shadow-xl text-center flex justify-between items-center cursor-pointer transition  rounded-lg " style="background-color: {{ $category->color }}">
            <div class="flex flex-row gap-4 align-end">
                <span>{{ $category->categorie_nom }}</span>
                {{--<x-mary-button @click="$wire.showCategorieModal = true" label="Edit Category" class="border bg-blue-500 text-white rounded-lg py-3 font-semibold hover:bg-blue-700" />--}}
                <x-mary-button wire:click.stop="deleteCategory({{ $category->id }})" icon="o-trash" class="border bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-700" />
            </div>

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
                    <div class="l m-10 bg-white shadow-md text-center rounded-lg">
                        <div wire:click="toggleSubCategory({{ $subCategory->id }})" class="max-w-6xl p-6 m-6  bg-green-300 shadow-xl text-center flex justify-between items-center cursor-pointer transition  rounded-lg ">
                            <div class="flex flex-row gap-4 align-middle">
                                <span>{{ $subCategory->sous_categorie_nom }}</span>
                                {{--<x-mary-button wire:click="editSubCategory({{ $subCategory->id }})" label="Edit Subcategory" class="border bg-blue-500 text-white rounded-lg py-3 font-semibold hover:bg-blue-700" />--}}
                                <x-mary-button wire:click.stop="deleteSubCategory({{ $category->id }})" icon="o-trash" class="border bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-700" />
                            </div>
                            <span class="ml-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                                    @if(in_array($subCategory->id, $openSubCategories))
                                        <polyline points="18 15 12 9 6 15"></polyline>
                                    @else
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    @endif
                            </svg>
                        </span>
                    </div>
                        @if(in_array($subCategory->id, $openSubCategories))
                            <div class="max-w-6xl m-10 bg-white shadow-md text-center rounded-lg">
                                @foreach($subCategory->sousSousCategories as $subSubCategory)
                                    <div class="max-w-6xl p-6 m-16  bg-green-300 shadow-xl text-center flex justify-between items-center cursor-pointer transition  rounded-lg ">
                                        <div class="flex flex-row gap-4 align-middle">

                                            <span>{{ $subSubCategory->sous_sous_categorie_nom }}</span>
                                            {{--<x-mary-button wire:click="editSubSubCategory({{ $subSubCategory->id }})" label="Edit Subsubcategory" class="border bg-blue-500 text-white rounded-lg py-3 font-semibold hover:bg-blue-700" />--}}
                                            <x-mary-button wire:click="deleteSubSubCategory({{ $subSubCategory->id }})" icon="o-trash" class="border bg-black text-white rounded-lg py-3 font-semibold hover:bg-red-700" />
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="ml-4 flex flex-row p-10 justify-center items-end  gap-3">
                                        <x-mary-input type="text" wire:model="nouvelles_sous_sous_categories.{{ $subCategory->id }}" label="Nom de la nouvelle sous-catégorie"   placeholder="Nouvelle sous-sous-catégorie" />
                                        <x-mary-input type="text" wire:model="nouvelles_sous_sous_categories_montant.{{ $subCategory->id }}" label="Montant initial" placeholder="Montant initial" />
                                        <x-mary-button wire:click="addNewSubSubCategory({{ $subCategory->id }})" label="Ajouter une sous-sous-catégorie" class="border bg-black text-white rounded-lg py-3 font-semibold hover:bg-green-600" />
                                    </div>
                            </div>
                        @endif
                    </div>

                @endforeach

                    <div class="ml-4 flex flex-row p-10 justify-center items-end  gap-3">
                        <x-mary-input type="text" wire:model="nouvelles_sous_categories.{{ $category->id }}" label="Nom de la nouvelle sous-catégorie"   placeholder="Nouvelle sous-catégorie" />
                        <x-mary-input type="text" wire:model="nouvelles_sous_categories_montant.{{ $category->id }}" label="Montant initial" placeholder="Montant initial" />
                        <x-mary-button wire:click="addNewSubCategory({{ $category->id }})" label="Ajouter une sous-catégorie" class="border bg-black text-white rounded-lg py-3 font-semibold hover:bg-green-600" />
                    </div>
            </div>
                {{--<x-mary-modal  wire:model="showCategorieModal" title="Edit Item" >
                    <x-mary-form wire:submit class="bg-white glass rounded p-6">
                        <x-mary-input class="bg-white" type="text" wire:model="editingItem.categorie_nom" placeholder="{{$category->categorie_nom}}"  label="Nom de la catégorie"  />
                        <x-mary-input class="bg-white" type="number" wire:model="editingItem.montant" placeholder="{{$category->montant}}"  label="Montant initial de la catégorie"  />
                        <x-mary-colorpicker class="bg-white glass" wire:model="editingItem.couleur" placeholder="{{$category->color}}" label="Couleur de la catégorie" />
                        <x-mary-button wire:click="updateCategorie(editingItem.categorie_nom, editingItem.montant, editingItem.color)" label="Save" class="bg-success text-black" />
                    </x-mary-form>
                    <x-slot:actions>

                        <x-mary-button label="Cancel" wire:click="toggleCategorieModal" class="bg-error text-black" />
                    </x-slot:actions>
                </x-mary-modal>--}}
        @endif
    </div>
@endforeach



</div>
