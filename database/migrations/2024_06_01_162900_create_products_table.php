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
        
            $table->id();
            $table->string('product_name');
            $table->string('product_picture');
            $table->string('product_weight');
            $table->unsignedBigInteger('id_product_category');
            $table->boolean('product_status')->default(true);
            $table->timestamps(); // Esta línea se encarga de agregar las columnas created_at y updated_at automáticamente

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
