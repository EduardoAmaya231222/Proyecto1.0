<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('descripcion');
            $table->integer('cantidad_beneficiados')->nullable();
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('municipio_id');
            $table->unsignedBigInteger('responsable_id');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

            $table->foreign('departamento_id')->references('id')->on('departments');
            $table->foreign('municipio_id')->references('id')->on('municipalities');
            $table->foreign('responsable_id')->references('id')->on('users');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
