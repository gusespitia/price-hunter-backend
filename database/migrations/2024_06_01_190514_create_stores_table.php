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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false); // El campo 'name' no puede ser nulo
            $table->string('url_base', 255)->unique(); // La URL base de la tienda debe ser única
            $table->string('logo')->nullable(false); // El logo de la tienda puede ser nulo
            $table->boolean('status')->default(true); // Por defecto, el estado de la tienda es activo
            $table->timestamps(); // Esta línea se encarga de agregar las columnas created_at y updated_at automáticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
