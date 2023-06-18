<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsablesTable extends Migration
{
    public function up()
    {
        Schema::create('responsables', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // Agrega aquí otros campos necesarios para almacenar la información del responsable
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsables');
    }
}
