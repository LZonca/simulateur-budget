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
        Schema::table('simulations', function (Blueprint $table) {
            $table->decimal('available_budget', 8, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('simulations', function (Blueprint $table) {
            $table->dropColumn('available_budget');
        });
    }
};
