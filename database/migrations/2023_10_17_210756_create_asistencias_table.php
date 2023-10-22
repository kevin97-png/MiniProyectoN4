<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    protected $connection = 'mysql';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('estado', 1); // 'A' para Asistió temprano, 'T' para Asistió tarde, 'F' para Faltó
            $table->unsignedBigInteger('alumno_id'); // Columna para la clave foránea a alumnos
            $table->unsignedBigInteger('curso_id'); // Columna para la clave foránea a cursos

            $table->foreign('alumno_id')->references('id')->on('alumnos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps(); // Mover esta línea aquí
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');

    }
};
