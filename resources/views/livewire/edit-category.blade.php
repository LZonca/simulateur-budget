<x-app-layout>
    <div class="m-32 ">
        <form wire:submit.prevent="updateCategorie" class="flex flex-col justify-center gap-4 p-8" style="background-color: {{$categorie->color}}">
            <x-mary-input type="text" placeholder="{{$categorie->categorie_nom}}" wire:model="categorie.categorie_nom" label="Nom de la catégorie" />
            <x-mary-colorpicker wire:model.live.debounce="color" value="{{$categorie->color}}" label="Couleur de la catégorie" />
            <x-mary-input type="number" placeholder="{{$categorie->montant}}" wire:model="categorie.montant" label="Montant de la catégorie" />

            <div class="flex flex-col justify-center gap-4 mx-6 bg-base-100 p-3 rounded">
                @foreach($categorie->sousCategories as $index => $sousCategorie)
                    <x-mary-input type="text" placeholder="{{$sousCategorie->sous_categorie_nom}}" wire:model="sousCategories.{{ $index }}.sous_categorie_nom" label="Nom de la sous-catégorie" />
                    <x-mary-input type="number" placeholder="{{$sousCategorie->montant}}" wire:model="sousCategories.{{ $index }}.montant" label="Montant de la sous-catégorie" />

                    <div class="flex flex-col justify-center gap-4 mx-6">
                        @foreach($sousCategorie->sousSousCategories as $subIndex => $sousSousCategorie)
                            <x-mary-input placeholder="{{$sousSousCategorie->sous_sous_categorie_nom}}" wire:model="sousSousCategories.{{ $index }}.{{ $subIndex }}.sous_sous_categorie_nom" label="Nom de la sous-sous-catégorie" />
                            <x-mary-input type="number" placeholder="{{$sousSousCategorie->montant}}" wire:model="sousSousCategories.{{ $index }}.{{ $subIndex }}.montant" label="Montant de la sous-sous-catégorie" />
                        @endforeach
                    </div>
                @endforeach
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <x-mary-button type="submit" label="Modifier" class="bg-success text-black" spinner />
        </form>
    </div>
</x-app-layout>
