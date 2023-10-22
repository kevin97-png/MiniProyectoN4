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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('descripcion', 200)->nullable();
            $table->float('matriculados', 100);
            $table->unsignedBigInteger('docente_id'); // Columna para la clave foránea a docente
            $table->foreign('docente_id')->references('id')->on('docentes')
            ->onUpdate('cascade')
            ->onDelete('cascade').

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
