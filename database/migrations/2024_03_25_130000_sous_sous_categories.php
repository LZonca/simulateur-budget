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
        Schema::create('sous_sous_categories', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('sous_categorie_id')->constrained();
            $table->string('sous_sous_categorie_nom');
            $table->integer('montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_sous_categories');
    }
};
