<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importante agregar esta línea arriba

class RutasSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Creamos una ruta de prueba (Asegúrate de que la tabla se llame 'routes' o 'rutas' según como la hayas creado)
        $rutaId = DB::table('routes')->insertGetId([
            'name' => 'Ruta P3 (Prueba)',
            'color_hex' => '#FF0000', // Color rojo para la línea
        ]);

        // 2. Le agregamos 3 coordenadas a esa ruta
        DB::table('route_coordinates')->insert([
            ['route_id' => $rutaId, 'latitude' => 7.1193, 'longitude' => -73.1227, 'order_index' => 1],
            ['route_id' => $rutaId, 'latitude' => 7.1215, 'longitude' => -73.1205, 'order_index' => 2],
            ['route_id' => $rutaId, 'latitude' => 7.1235, 'longitude' => -73.1180, 'order_index' => 3],
        ]);
    }
}
