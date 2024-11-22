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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id(); // ID primaria autoincremental
            $table->foreignId('product_id')->constrained()->onDelete('cascade'); // Relación con la tabla products
            $table->string('image_url'); // URL de la imagen
            $table->boolean('is_primary')->default(false); // Indica si es la imagen principal
            $table->integer('sort_order')->default(0); // Orden de visualización
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_images');
    }
};
