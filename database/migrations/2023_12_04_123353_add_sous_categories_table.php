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
        Schema::create('sous_categories', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('categorie_id')->constrained();
            $table->string('sous_categorie_nom');
            $table->float('montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('sous_categories');
    }
};
