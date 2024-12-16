<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_user', function (Blueprint $table) {
            $table->id();
            $table->string('utilisateur_matricule');
            $table->boolean('read')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('notification_id'); // Ajouter une colonne 'notification_id'
            $table->foreign('utilisateur_matricule')->references('matricule')->on('utilisateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_user');
    }
}
