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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('descripcion');
            $table->integer('cantidad_beneficiados');
            $table->unsignedBigInteger('ubicacion_departamento_id');
            $table->unsignedBigInteger('ubicacion_municipio_id');
            $table->unsignedBigInteger('responsable_id');
            $table->unsignedBigInteger('estado_id');
            $table->timestamps();

            $table->foreign('ubicacion_departamento_id')->references('id')->on('departments');
            $table->foreign('ubicacion_municipio_id')->references('id')->on('municipalities');
            $table->foreign('responsable_id')->references('id')->on('users');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
