{{-- <section>
    <x-mary-range wire:model.live="level" label="Select a level" :hint="$level" />
    <x-mary-range wire:model.live="level1" label="Select a level" :hint="$level1" />
    <x-mary-range wire:model.live="level2" label="Select a level" :hint="$level2" />
    <x-mary-range wire:model="level3" label="Select a level" :hint="$level3" />
</section> --}}

<section>
    <!-- Valeurs indépendantes avec boutons +/- 10% -->
    <div>
        <label for="level">Catégorie A :</label>
        <button wire:click="adjustLevel(-10)">-10%</button>
        <input type="number" id="level" wire:model="level" class="value-input">
        <button wire:click="adjustLevel(10)">+10%</button>

    </div>

    <div>
        <label for="level1">Catégorie B :</label>
        <button wire:click="adjustLevel1(-10)">-10%</button>
        <input type="number" id="level1" wire:model="level1" class="value-input">
        <button wire:click="adjustLevel1(10)">+10%</button>

    </div>

    <div>
        <label for="level2">Catégorie C :</label>
        <button wire:click="adjustLevel2(-10)">-10%</button>
        <input type="number" id="level2" wire:model="level2" class="value-input">
        <button wire:click="adjustLevel2(10)">+10%</button>

    </div>

    <div>
        <label for="level3">Catégorie D :</label>
        <input type="number" id="level3" wire:model="level3" class="value-input" disabled>
        <!-- Le bouton +/- 10% pour la catégorie D est désactivé car elle est désactivée -->
    </div>
</section>


