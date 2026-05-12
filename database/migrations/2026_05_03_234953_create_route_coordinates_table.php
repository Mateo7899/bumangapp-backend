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
    Schema::create('route_coordinates', function (Blueprint $table) {
        $table->id();
        // Conecta con la tabla de rutas. Si se borra la ruta, se borran sus puntos.
        $table->foreignId('route_id')->constrained()->onDelete('cascade'); 
        $table->decimal('latitude', 10, 8);
        $table->decimal('longitude', 11, 8);
        $table->integer('order_index'); // Para saber qué punto va después de cual
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_coordinates');
    }
};
