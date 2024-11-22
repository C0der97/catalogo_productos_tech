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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID primaria autoincremental
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Relación con la tabla categories
            $table->string('name'); // Nombre del producto
            $table->string('slug')->unique(); // Slug único para URLs amigables
            $table->text('description')->nullable(); // Descripción opcional del producto
            $table->decimal('price', 10, 2); // Precio con 2 decimales
            $table->string('image_url')->nullable(); // URL de la imagen del producto
            $table->integer('stock')->default(0); // Cantidad en inventario
            $table->string('sku')->unique(); // Código único del producto
            $table->boolean('is_active')->default(true); // Estado del producto
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
