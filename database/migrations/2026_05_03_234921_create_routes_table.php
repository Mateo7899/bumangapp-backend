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
    Schema::create('routes', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nombre de la ruta (Ej: P3, AB1)
        $table->string('color_hex')->nullable(); // Color de la línea en el mapa
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
