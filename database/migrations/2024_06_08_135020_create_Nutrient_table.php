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
        Schema::create('Nutrient', function (Blueprint $table) {
            $table->id('id_nutrient');
            $table->string('nama_pengguna',50);
            $table->string('nama_makanan',50);
            $table->string('calories',50);
            $table->string('protein',50);
            $table->string('carbs',50);
            $table->string('fat',50);
            $table->string('fiber',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Nutrient');
    }
};
