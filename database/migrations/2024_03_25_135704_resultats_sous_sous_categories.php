<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultats_sous_sous_categories', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('simulation_id')->constrained();
            $table->foreignId('sous_sous_categorie_id')->constrained();
            $table->foreignId('resultat_sous_categorie_id')->constrained('resultats_sous_categories')->name('fk_resultat_sous_categorie');
            $table->float('resultat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats_sous_sous_categories');
    }
};
