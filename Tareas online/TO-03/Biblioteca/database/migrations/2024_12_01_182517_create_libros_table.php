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
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id_libro')->autoIncrement();
            $table->string('titulo', 60);
            $table->string('categoria', 30);
            $table->foreignId('autor_id')->constrained('autores')->onUpdate('cascade')->onDelete('cascade');
            $table->string('descripcion', 100);
            $table->decimal('precio', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
