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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // ID primaria autoincremental
            $table->string('name'); // Nombre de la categoría
            $table->text('description')->nullable(); // Descripción opcional
            $table->string('slug')->unique(); // Slug único para URL amigables
            $table->boolean('is_active')->default(true); // Estado de la categoría
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
