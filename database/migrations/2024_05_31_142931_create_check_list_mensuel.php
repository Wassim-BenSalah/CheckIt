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
        Schema::create('check_list_mensuel', function (Blueprint $table) {
            $table->id();
            $table->string('test_Transmetteur_GSM');
            $table->string('test_Sonde_Thermique');
            $table->string('salle_condition_mensuelle');
            $table->string('imageTestGsm')->nullable();
            $table->string('imageTestSondeThermique')->nullable();
            $table->string('salleID');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_list_mensuel');
    }
};
