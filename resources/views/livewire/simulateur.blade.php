<section class="flex flex-col gap-6 pt-32 bg-transparent mx-8">
    <x-mary-toast />
        <x-mary-chart wire:model="resultChart" />
<!-- ... rest of the view -->
    <h2 class="text-2xl">
        Budget: {{ number_format($initialTotalBudget , 0, '', ' ') }}€
        <div class="text-lg font-medium">
            Budget disponible : {{ number_format($this->getAvailableBudget() , 0, '', ' ') }}€
        </div>
    </h2>
    @foreach($categories as $categorie)
        <div x-data="{ open: false }" class="border border-base-300 " style="background-color: {{$categorie->color}}">
            <div @click="open = !open" class="text-xl font-medium p-6 cursor-pointer" >
                <span class="bg-base-100 outline-1 rounded p-3">{{ucfirst($categorie->categorie_nom)}} - ({{number_format(array_sum(array_filter($this->values['subCategories'], function($key) use ($categorie) {
    return in_array($key, array_column($categorie->sousCategories->toArray(), 'id'));
}, ARRAY_FILTER_USE_KEY)), 0, '', ' ')  }}€)</span>
                <x-mary-icon x-show="open" name="c-chevron-down"/>
                <x-mary-icon x-show="!open" name="s-chevron-left"/>
            </div>
            <div x-show="open" class="flex flex-col justify-center">
                @foreach($categorie->sousCategories as $sousCategorie)
                    <div x-data="{ openSub: false }" class="border border-base-300 bg-base-200 m-8" style="background-color: {{$categorie->color}}">
                        <div @click="openSub = !openSub" class="text-lg font-medium cursor-pointer m-8" style="background-color: {{$categorie->color}}">
                            <span class="bg-base-100 outline-1 rounded p-3">{{ucfirst($sousCategorie->sous_categorie_nom)}}
                            @if(count($sousCategorie->sousSousCategories) > 0)
                                - ({{ number_format(array_sum($this->values['subSubCategories']), 0, '', ' ') }}€)
                                <x-mary-icon x-show="open" name="c-chevron-down"/>
                                <x-mary-icon x-show="!open" name="s-chevron-left"/>
                            @else
                                - ({{ number_format($this->values['subCategories'][$sousCategorie->id], 0, '', ' ') }}€)
                            @endif
                            </span>
                        </div>
                        <div x-show="openSub" class="flex flex-col justify-center ">
                            <div class="flex flex-col justify-between items-center mt-2 border border-gray-950 p-8 bg-base-100" >
                                <span class="text-sm">{{ number_format($this->getDifference($sousCategorie->id, 'subCategories'), 0, '', ' ') }}€</span>

                                <div class="flex flex-row gap-4 w-full justify-center">
                                    <x-mary-button wire:click="decreaseLevel({{$sousCategorie->id}}, 'subCategories', 1000000)" icon="o-minus" label="1 Million" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="decreaseLevel({{$sousCategorie->id}}, 'subCategories', 100000)"  icon="o-minus" label="100 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="decreaseLevel({{$sousCategorie->id}}, 'subCategories', 10000)" icon="o-minus" label="10 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="decreaseLevel({{$sousCategorie->id}}, 'subCategories', 1000)" icon="o-minus" label="1000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="decreaseLevel({{$sousCategorie->id}}, 'subCategories', 100)" icon="o-minus" label="100" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="decreaseLevel({{$sousCategorie->id}}, 'subCategories', 10)" icon="o-minus" label="10" class="px-2 py-1 bg-blue-500 text-white rounded-md" />

                                    <x-mary-input type="number" id="level{{$sousCategorie->id}}" wire:model="values.subCategories.{{$sousCategorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{number_format($sousCategorie->montant , 0, '', ' ')}}" />

                                    <x-mary-button wire:click="increaseLevel({{$sousCategorie->id}}, 'subCategories', 10)" icon="o-plus" label="10" class="px-2 py-1 bg-blue-500 text-white rounded-md"/>
                                    <x-mary-button wire:click="increaseLevel({{$sousCategorie->id}}, 'subCategories', 100)" icon="o-plus" label="100" class="px-2 py-1 bg-blue-500 text-white rounded-md"/>
                                    <x-mary-button wire:click="increaseLevel({{$sousCategorie->id}}, 'subCategories', 1000)" icon="o-plus" label="1000" class="px-2 py-1 bg-blue-500 text-white rounded-md"/>
                                    <x-mary-button wire:click="increaseLevel({{$sousCategorie->id}}, 'subCategories', 10000)" icon="o-plus" label="10 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="increaseLevel({{$sousCategorie->id}}, 'subCategories', 100000)" icon="o-plus" label="100 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    <x-mary-button wire:click="increaseLevel({{$sousCategorie->id}}, 'subCategories', 1000000)" icon="o-plus" label="1 Million" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                </div>

                            </div>
                            @foreach($sousCategorie->sousSousCategories as $sousSousCategorie)
                                <div class="flex flex-col justify-between items-center  mt-2 ">

                                    <span class="bg-base-100 outline-1 rounded p-3">{{ ucfirst($sousSousCategorie->sous_sous_categorie_nom) }} - {{ number_format($this->values['subSubCategories'][$sousSousCategorie->id], 0, '', ' ') }}€</span>
                                    <span class="text-sm">{{ number_format($this->getDifference($sousSousCategorie->id, 'subSubCategories'), 0, '', ' ') }}€</span>

                                    <div class=" flex flex-row mx-6 p-8">
                                        <x-mary-button wire:click="decreaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 1000000)" icon="o-minus" label="1 Million" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="decreaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 100000)" icon="o-minus" label="100 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="decreaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 10000)" icon="o-minus" label="10 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="decreaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 1000)" icon="o-minus" label="1000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="decreaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 100)" icon="o-minus" label="-100" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="decreaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 10)" icon="o-minus" label="10" class="px-2 py-1 bg-blue-500 text-white rounded-md" />

                                        <x-mary-input type="number" id="level{{$sousSousCategorie->id}}" wire:model="values.subSubCategories.{{$sousSousCategorie->id}}" class="value-input w-2/3 px-2 py-1 border rounded-md" placeholder="{{number_format($sousSousCategorie->montant , 0, '', ' ')}}" />

                                        <x-mary-button wire:click="increaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 10)" icon="o-plus"  label="10" class="px-2 py-1 bg-blue-500 text-white rounded-md"/>
                                        <x-mary-button wire:click="increaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 100)" icon="o-plus"  label="100" class="px-2 py-1 bg-blue-500 text-white rounded-md"/>
                                        <x-mary-button wire:click="increaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 1000)" icon="o-plus"  label="1000" class="px-2 py-1 bg-blue-500 text-white rounded-md"/>
                                        <x-mary-button wire:click="increaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 10000)" icon="o-plus" label="10 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="increaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 100000)" icon="o-plus"  label="100 000" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                        <x-mary-button wire:click="increaseLevel({{$sousSousCategorie->id}}, 'subSubCategories', 1000000)" icon="o-plus"  label="1 Million" class="px-2 py-1 bg-blue-500 text-white rounded-md" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
    <div class="flex flex-col gap-3 border p-4 rounded-lg">
        @if (session('error'))
            <div class="alert bg-error text-gray-900 font-bold alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <x-mary-input label="Nom du resultat" placeholder="Nom du resultat" wire:model="nomResultat" class="value-input w-2/3 px-2 py-1 border rounded-md" />
        <x-mary-button wire:click="saveSimulation"  label="Enregistrer" class="px-2 py-1 bg-blue-500 text-white rounded-md" spinner/>
    </div>
</section>
