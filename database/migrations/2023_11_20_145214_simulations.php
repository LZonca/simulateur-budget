<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('simulations', function (Blueprint $table) {
        $table->id('simulations_id');
        $table->string('simulations_nom');
        $table->date('simulations_date');
        $table->string('simulations_resultats');
        $table->foreignId('utilisateur_id')->constrained('users'); // Use 'users' instead of 'utilisateurs'
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simulations');
    }
};
