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
            $table->id('bookID');
            $table->foreignId('userID')->constrained('users');
            $table->foreignId('courseID'); // Sin la restricción de clave externa
            $table->string('codigo');
            $table->text('descripcion');
            $table->string('marca');
            $table->text('observaciones')->nullable();
            $table->foreignId('categoria'); // Sin la restricción de clave externa
            $table->date('fecha_publicacion');
            $table->enum('estado', ['disponible', 'solicitado', 'entregado'])->default('disponible');
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
