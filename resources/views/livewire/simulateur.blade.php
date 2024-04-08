

<section class="flex flex-col gap-6"><br>

    <!-- Affichage des catégories, sous-catégories et sous-sous-catégories avec leurs boutons +/- 10% -->
    @foreach($categories as $categorie)
        <div tabindex="0" class="collapse collapse-arrow border border-base-300 bg-base-200">
            <div class="collapse-title text-xl font-medium">
                {{$categorie->categorie_nom}}
            </div>
            <div class="collapse-content ">
                <div class="flex flex-col justify-center">


                <div class="flex flex-row justify-between items-center mt-2">
                    <button wire:click="adjustLevel({{$categorie->id}},-10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">-10%</button>
                    <input type="number" id="level{{$categorie->id}}" wire:model="level{{$categorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{$categorie->montant}}">
                    <button wire:click="adjustLevel({{$categorie->id}}, 10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">+10%</button>
                </div>
                @foreach($categorie->sousCategories as $sousCategorie)
                <div class="flex flex-row gap-2">
                    {{$sousCategorie->sous_categorie_nom}}
                    <div class="flex justify-between items-center mt-2">
                        <button wire:click="adjustLevel({{$sousCategorie->id}},-10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">-10%</button>
                        <input type="number" id="level{{$sousCategorie->id}}" wire:model="level{{$sousCategorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{$sousCategorie->montant}}">
                        <button wire:click="adjustLevel({{$sousCategorie->id}}, 10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">+10%</button>
                    </div>
                </div>
                <div class="collapse-content">
                    @foreach($sousCategorie->sousSousCategories as $sousSousCategorie)
                        {{$sousSousCategorie->sous_sous_categorie_nom}}
                    @endforeach
                </div>

                @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Catégorie D (si nécessaire) -->
    <div class="border p-4 rounded-lg">
        <label for="level3">Catégorie D :</label>
        <input type="number" id="level3" wire:model="level3" class="value-input w-2/3 px-2 py-1 border rounded-md" disabled>
        <!-- Le bouton +/- 10% pour la catégorie D est désactivé car elle est désactivée -->
    </div>
</section>
