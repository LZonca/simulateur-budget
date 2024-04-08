

<section class="flex flex-col gap-6"><br>

    <!-- Affichage des catégories, sous-catégories et sous-sous-catégories avec leurs boutons +/- 10% -->
    @foreach($categories as $categorie)
        <div class="border p-4 rounded-lg">
            <label for="level{{$categorie->id}}">{{$categorie->categorie_nom}} :</label>
            <div class="flex justify-between items-center mt-2">
                <button wire:click="adjustLevel({{$categorie->id}},-10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">-10%</button>
                <input type="number" id="level{{$categorie->id}}" wire:model="level{{$categorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{$categorie->montant}}">
                <button wire:click="adjustLevel({{$categorie->id}}, 10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">+10%</button>
            </div>
        </div>

        {{-- @foreach($sousCategories->where('categorie_id', $categorie->id) as $sousCategorie)
            <div class="border p-4 rounded-lg p-2">
                <label for="level{{$sousCategorie->id}}">{{$sousCategorie->sous_categorie_nom}} :</label>
                <div class="flex justify-between items-center mt-2">
                    <button wire:click="adjustLevel{{$sousCategorie->id}}(-10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">-10%</button>
                    <input type="number" id="level{{$sousCategorie->id}}" wire:model="level{{$sousCategorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{$sousCategorie->montant}}">
                    <button wire:click="adjustLevel{{$sousCategorie->id}}(10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">+10%</button>
                </div>
            </div>

            @foreach($sousSousCategories->where('sous_categorie_id', $sousCategorie->id) as $sousSousCategorie)
                <div class="border p-4 rounded-lg">
                    <label for="level{{$sousSousCategorie->id}}">{{$sousSousCategorie->sous_sous_categorie_nom}} :</label>
                    <div class="flex justify-between items-center mt-2">
                        <button wire:click="adjustLevel{{$sousSousCategorie->id}}(-10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">-10%</button>
                        <input type="number" id="level{{$sousSousCategorie->id}}" wire:model="level{{$sousSousCategorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{$sousSousCategorie->montant}}">
                        <button wire:click="adjustLevel{{$sousSousCategorie->id}}(10)" class="px-2 py-1 bg-blue-500 text-white rounded-md">+10%</button>
                    </div>
                </div>
            @endforeach
        @endforeach --}}
    @endforeach

    <!-- Catégorie D (si nécessaire) -->
    <div class="border p-4 rounded-lg">
        <label for="level3">Catégorie D :</label>
        <input type="number" id="level3" wire:model="level3" class="value-input w-2/3 px-2 py-1 border rounded-md" disabled>
        <!-- Le bouton +/- 10% pour la catégorie D est désactivé car elle est désactivée -->
    </div>
</section>
