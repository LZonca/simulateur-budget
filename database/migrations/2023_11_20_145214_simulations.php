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
        $table->id('id');
        $table->string('simulation_nom');
        $table->date('simulation_date')->default(now());
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
