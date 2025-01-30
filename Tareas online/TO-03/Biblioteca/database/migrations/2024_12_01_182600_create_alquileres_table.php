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
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id('alquiler_id')->autoIncrement();
            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id')->references('id_libro')->on('libros')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id_usuario')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->date('fechprestamo');
            $table->date('fechdevolucion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquileres');
    }
};
