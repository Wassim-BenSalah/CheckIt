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
        Schema::create('check_list', function (Blueprint $table) {
            $table->id();
            $table->string('test_temperature');
            $table->string('test_backbone');
            $table->string('test_onduleur');
            $table->string('test_proprete');
            $table->string('salle_condition');
            $table->string('salleID');
            $table->string('imageTestTemperature')->nullable();
            $table->string('imageTestBackbone')->nullable();
            $table->string('imageTestOnduleur')->nullable();
            $table->string('imageTestProprete')->nullable();
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_list');
    }
};
