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
        Schema::create('sensor_api', function (Blueprint $table) {
            $table->id();
            $table->String('Data_Sensor', 30);
            $table->String('Status', 30);
            $table->date('Tanggal');
            $table->time('Waktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_api');
    }
};
