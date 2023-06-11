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
        Schema::create('alat', function (Blueprint $table) {
            $table->id('id_Alat', 20);
            $table->String('Nama_Alat', 30);
            $table->String('id_SensorAsap', 20);
            $table->String('id_SensorApi', 20);
            $table->String('id_SensorSuhu', 20);
            $table->String('id_SensorGas', 20);
            $table->String('id_Lokasi', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alat');
    }
};
