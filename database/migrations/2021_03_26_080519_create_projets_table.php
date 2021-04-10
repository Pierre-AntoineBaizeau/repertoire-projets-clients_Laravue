<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients');
            $table->string('nom_responsable');
            $table->string('prenom_responsable');
            $table->string('telephone_responsable');
            $table->string('email_responsable');
            $table->string('description');
            $table->string('titre');
            $table->string('start', $precision = 0);
            $table->string('end', $precision = 0);
            $table->integer('statut_du_projet');
            $table->integer('nombre_jours_vendus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
