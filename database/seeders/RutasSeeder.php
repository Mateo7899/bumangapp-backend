<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RutasSeeder extends Seeder
{
    public function run(): void
    {
        // Limpiar datos existentes
        DB::table('route_coordinates')->delete();
        DB::table('routes')->delete();

        // Insertar rutas
        DB::table('routes')->insert([
            ['id' => 1, 'name' => 'Galán - Modelo - Estadio - UIS', 'color_hex' => '#E53935'],
            ['id' => 2, 'name' => 'Cristal Bajo - INEM - Morrorico - Buenavista', 'color_hex' => '#8E24AA'],
            ['id' => 3, 'name' => 'Cristal Bajo - Provenza - Cacique - Buenavista', 'color_hex' => '#039BE5'],
            ['id' => 4, 'name' => 'Carrizal - Cabecera - Portón Tejar - Campanazo', 'color_hex' => '#FF6F00'],
            ['id' => 5, 'name' => 'Trinidad - Terrazas - Av. Quebradaseca - San Miguel', 'color_hex' => '#00897B'],
            ['id' => 6, 'name' => 'Mirador Arenales - Bahondo - Carrera 33 - UIS', 'color_hex' => '#C0392B'],
            ['id' => 7, 'name' => 'Hamacas - Carrera 33 - Reposo', 'color_hex' => '#6D4C41'],
            ['id' => 8, 'name' => 'Norte Café - Estoraques - Ciudad Norte', 'color_hex' => '#1565C0'],
            ['id' => 9, 'name' => 'Cumbre - El Carmen - Carrera 33 - San Toto', 'color_hex' => '#558B2F'],
            ['id' => 10, 'name' => 'Mirador Arenales - Poblado - Centro - Cra 22', 'color_hex' => '#AD1457'],
        ]);

        // Coordenadas Ruta 1
        DB::table('route_coordinates')->insert([
            ['route_id' => 1, 'latitude' => 7.1190, 'longitude' => -73.1280, 'order_index' => 1],
            ['route_id' => 1, 'latitude' => 7.1100, 'longitude' => -73.1180, 'order_index' => 2],
            ['route_id' => 1, 'latitude' => 7.0980, 'longitude' => -73.1100, 'order_index' => 3],
            ['route_id' => 1, 'latitude' => 7.0900, 'longitude' => -73.1050, 'order_index' => 4],
            ['route_id' => 1, 'latitude' => 7.0820, 'longitude' => -73.1010, 'order_index' => 5],
            ['route_id' => 1, 'latitude' => 7.0760, 'longitude' => -73.0980, 'order_index' => 6],
            ['route_id' => 1, 'latitude' => 7.0720, 'longitude' => -73.0960, 'order_index' => 7],
            ['route_id' => 1, 'latitude' => 7.0780, 'longitude' => -73.0990, 'order_index' => 8],
            ['route_id' => 1, 'latitude' => 7.0850, 'longitude' => -73.1020, 'order_index' => 9],
            ['route_id' => 1, 'latitude' => 7.1000, 'longitude' => -73.1100, 'order_index' => 10],
            ['route_id' => 1, 'latitude' => 7.1190, 'longitude' => -73.1280, 'order_index' => 11],
        ]);

        // Coordenadas Ruta 2
        DB::table('route_coordinates')->insert([
            ['route_id' => 2, 'latitude' => 7.1320, 'longitude' => -73.1240, 'order_index' => 1],
            ['route_id' => 2, 'latitude' => 7.1250, 'longitude' => -73.1200, 'order_index' => 2],
            ['route_id' => 2, 'latitude' => 7.1150, 'longitude' => -73.1160, 'order_index' => 3],
            ['route_id' => 2, 'latitude' => 7.0950, 'longitude' => -73.1050, 'order_index' => 4],
            ['route_id' => 2, 'latitude' => 7.0800, 'longitude' => -73.0980, 'order_index' => 5],
            ['route_id' => 2, 'latitude' => 7.0720, 'longitude' => -73.0940, 'order_index' => 6],
            ['route_id' => 2, 'latitude' => 7.0650, 'longitude' => -73.0910, 'order_index' => 7],
            ['route_id' => 2, 'latitude' => 7.0580, 'longitude' => -73.0870, 'order_index' => 8],
            ['route_id' => 2, 'latitude' => 7.0520, 'longitude' => -73.0840, 'order_index' => 9],
            ['route_id' => 2, 'latitude' => 7.0560, 'longitude' => -73.0860, 'order_index' => 10],
            ['route_id' => 2, 'latitude' => 7.0700, 'longitude' => -73.0930, 'order_index' => 11],
            ['route_id' => 2, 'latitude' => 7.1000, 'longitude' => -73.1080, 'order_index' => 12],
            ['route_id' => 2, 'latitude' => 7.1320, 'longitude' => -73.1240, 'order_index' => 13],
        ]);

        // Coordenadas Ruta 3
        DB::table('route_coordinates')->insert([
            ['route_id' => 3, 'latitude' => 7.1320, 'longitude' => -73.1240, 'order_index' => 1],
            ['route_id' => 3, 'latitude' => 7.1200, 'longitude' => -73.1180, 'order_index' => 2],
            ['route_id' => 3, 'latitude' => 7.1050, 'longitude' => -73.1120, 'order_index' => 3],
            ['route_id' => 3, 'latitude' => 7.0950, 'longitude' => -73.1060, 'order_index' => 4],
            ['route_id' => 3, 'latitude' => 7.0870, 'longitude' => -73.1010, 'order_index' => 5],
            ['route_id' => 3, 'latitude' => 7.0810, 'longitude' => -73.0990, 'order_index' => 6],
            ['route_id' => 3, 'latitude' => 7.0780, 'longitude' => -73.0960, 'order_index' => 7],
            ['route_id' => 3, 'latitude' => 7.0740, 'longitude' => -73.0940, 'order_index' => 8],
            ['route_id' => 3, 'latitude' => 7.0690, 'longitude' => -73.0910, 'order_index' => 9],
            ['route_id' => 3, 'latitude' => 7.0620, 'longitude' => -73.0870, 'order_index' => 10],
            ['route_id' => 3, 'latitude' => 7.0560, 'longitude' => -73.0850, 'order_index' => 11],
            ['route_id' => 3, 'latitude' => 7.0620, 'longitude' => -73.0870, 'order_index' => 12],
            ['route_id' => 3, 'latitude' => 7.0730, 'longitude' => -73.0930, 'order_index' => 13],
            ['route_id' => 3, 'latitude' => 7.1050, 'longitude' => -73.1120, 'order_index' => 14],
            ['route_id' => 3, 'latitude' => 7.1320, 'longitude' => -73.1240, 'order_index' => 15],
        ]);

        // Coordenadas Ruta 4
        DB::table('route_coordinates')->insert([
            ['route_id' => 4, 'latitude' => 7.1380, 'longitude' => -73.1300, 'order_index' => 1],
            ['route_id' => 4, 'latitude' => 7.1270, 'longitude' => -73.1240, 'order_index' => 2],
            ['route_id' => 4, 'latitude' => 7.1150, 'longitude' => -73.1160, 'order_index' => 3],
            ['route_id' => 4, 'latitude' => 7.1050, 'longitude' => -73.1100, 'order_index' => 4],
            ['route_id' => 4, 'latitude' => 7.0950, 'longitude' => -73.1050, 'order_index' => 5],
            ['route_id' => 4, 'latitude' => 7.0870, 'longitude' => -73.0990, 'order_index' => 6],
            ['route_id' => 4, 'latitude' => 7.0820, 'longitude' => -73.0950, 'order_index' => 7],
            ['route_id' => 4, 'latitude' => 7.0760, 'longitude' => -73.0910, 'order_index' => 8],
            ['route_id' => 4, 'latitude' => 7.0820, 'longitude' => -73.0950, 'order_index' => 9],
            ['route_id' => 4, 'latitude' => 7.0900, 'longitude' => -73.1010, 'order_index' => 10],
            ['route_id' => 4, 'latitude' => 7.1150, 'longitude' => -73.1160, 'order_index' => 11],
            ['route_id' => 4, 'latitude' => 7.1380, 'longitude' => -73.1300, 'order_index' => 12],
        ]);

        // Coordenadas Ruta 5
        DB::table('route_coordinates')->insert([
            ['route_id' => 5, 'latitude' => 7.0830, 'longitude' => -73.0960, 'order_index' => 1],
            ['route_id' => 5, 'latitude' => 7.0900, 'longitude' => -73.0990, 'order_index' => 2],
            ['route_id' => 5, 'latitude' => 7.0960, 'longitude' => -73.1010, 'order_index' => 3],
            ['route_id' => 5, 'latitude' => 7.1020, 'longitude' => -73.1040, 'order_index' => 4],
            ['route_id' => 5, 'latitude' => 7.1080, 'longitude' => -73.1070, 'order_index' => 5],
            ['route_id' => 5, 'latitude' => 7.1140, 'longitude' => -73.1110, 'order_index' => 6],
            ['route_id' => 5, 'latitude' => 7.1080, 'longitude' => -73.1060, 'order_index' => 7],
            ['route_id' => 5, 'latitude' => 7.1010, 'longitude' => -73.1020, 'order_index' => 8],
            ['route_id' => 5, 'latitude' => 7.0950, 'longitude' => -73.0990, 'order_index' => 9],
            ['route_id' => 5, 'latitude' => 7.0880, 'longitude' => -73.0960, 'order_index' => 10],
            ['route_id' => 5, 'latitude' => 7.0800, 'longitude' => -73.0930, 'order_index' => 11],
            ['route_id' => 5, 'latitude' => 7.0740, 'longitude' => -73.0900, 'order_index' => 12],
            ['route_id' => 5, 'latitude' => 7.0800, 'longitude' => -73.0930, 'order_index' => 13],
            ['route_id' => 5, 'latitude' => 7.0850, 'longitude' => -73.0960, 'order_index' => 14],
            ['route_id' => 5, 'latitude' => 7.0830, 'longitude' => -73.0960, 'order_index' => 15],
        ]);

        // Coordenadas Ruta 6
        DB::table('route_coordinates')->insert([
            ['route_id' => 6, 'latitude' => 7.0300, 'longitude' => -73.0700, 'order_index' => 1],
            ['route_id' => 6, 'latitude' => 7.0380, 'longitude' => -73.0760, 'order_index' => 2],
            ['route_id' => 6, 'latitude' => 7.0450, 'longitude' => -73.0800, 'order_index' => 3],
            ['route_id' => 6, 'latitude' => 7.0550, 'longitude' => -73.0850, 'order_index' => 4],
            ['route_id' => 6, 'latitude' => 7.0640, 'longitude' => -73.0890, 'order_index' => 5],
            ['route_id' => 6, 'latitude' => 7.0700, 'longitude' => -73.0930, 'order_index' => 6],
            ['route_id' => 6, 'latitude' => 7.0750, 'longitude' => -73.0950, 'order_index' => 7],
            ['route_id' => 6, 'latitude' => 7.0720, 'longitude' => -73.0940, 'order_index' => 8],
            ['route_id' => 6, 'latitude' => 7.0700, 'longitude' => -73.0930, 'order_index' => 9],
            ['route_id' => 6, 'latitude' => 7.0720, 'longitude' => -73.0940, 'order_index' => 10],
            ['route_id' => 6, 'latitude' => 7.0640, 'longitude' => -73.0890, 'order_index' => 11],
            ['route_id' => 6, 'latitude' => 7.0450, 'longitude' => -73.0800, 'order_index' => 12],
            ['route_id' => 6, 'latitude' => 7.0300, 'longitude' => -73.0700, 'order_index' => 13],
        ]);

        // Coordenadas Ruta 7
        DB::table('route_coordinates')->insert([
            ['route_id' => 7, 'latitude' => 7.1450, 'longitude' => -73.1350, 'order_index' => 1],
            ['route_id' => 7, 'latitude' => 7.1380, 'longitude' => -73.1300, 'order_index' => 2],
            ['route_id' => 7, 'latitude' => 7.1300, 'longitude' => -73.1250, 'order_index' => 3],
            ['route_id' => 7, 'latitude' => 7.1200, 'longitude' => -73.1190, 'order_index' => 4],
            ['route_id' => 7, 'latitude' => 7.1100, 'longitude' => -73.1140, 'order_index' => 5],
            ['route_id' => 7, 'latitude' => 7.0950, 'longitude' => -73.1060, 'order_index' => 6],
            ['route_id' => 7, 'latitude' => 7.0850, 'longitude' => -73.1010, 'order_index' => 7],
            ['route_id' => 7, 'latitude' => 7.0720, 'longitude' => -73.0940, 'order_index' => 8],
            ['route_id' => 7, 'latitude' => 7.0780, 'longitude' => -73.0960, 'order_index' => 9],
            ['route_id' => 7, 'latitude' => 7.0840, 'longitude' => -73.0970, 'order_index' => 10],
            ['route_id' => 7, 'latitude' => 7.0780, 'longitude' => -73.0960, 'order_index' => 11],
            ['route_id' => 7, 'latitude' => 7.0850, 'longitude' => -73.1010, 'order_index' => 12],
            ['route_id' => 7, 'latitude' => 7.1100, 'longitude' => -73.1140, 'order_index' => 13],
            ['route_id' => 7, 'latitude' => 7.1450, 'longitude' => -73.1350, 'order_index' => 14],
        ]);

        // Coordenadas Ruta 8
        DB::table('route_coordinates')->insert([
            ['route_id' => 8, 'latitude' => 7.1500, 'longitude' => -73.1380, 'order_index' => 1],
            ['route_id' => 8, 'latitude' => 7.1420, 'longitude' => -73.1340, 'order_index' => 2],
            ['route_id' => 8, 'latitude' => 7.1300, 'longitude' => -73.1260, 'order_index' => 3],
            ['route_id' => 8, 'latitude' => 7.1150, 'longitude' => -73.1170, 'order_index' => 4],
            ['route_id' => 8, 'latitude' => 7.0920, 'longitude' => -73.1040, 'order_index' => 5],
            ['route_id' => 8, 'latitude' => 7.0850, 'longitude' => -73.1010, 'order_index' => 6],
            ['route_id' => 8, 'latitude' => 7.0780, 'longitude' => -73.0960, 'order_index' => 7],
            ['route_id' => 8, 'latitude' => 7.0700, 'longitude' => -73.0920, 'order_index' => 8],
            ['route_id' => 8, 'latitude' => 7.0640, 'longitude' => -73.0880, 'order_index' => 9],
            ['route_id' => 8, 'latitude' => 7.0610, 'longitude' => -73.0860, 'order_index' => 10],
            ['route_id' => 8, 'latitude' => 7.0660, 'longitude' => -73.0890, 'order_index' => 11],
            ['route_id' => 8, 'latitude' => 7.0750, 'longitude' => -73.0940, 'order_index' => 12],
            ['route_id' => 8, 'latitude' => 7.0920, 'longitude' => -73.1040, 'order_index' => 13],
            ['route_id' => 8, 'latitude' => 7.1300, 'longitude' => -73.1260, 'order_index' => 14],
            ['route_id' => 8, 'latitude' => 7.1500, 'longitude' => -73.1380, 'order_index' => 15],
        ]);

        // Coordenadas Ruta 9
        DB::table('route_coordinates')->insert([
            ['route_id' => 9, 'latitude' => 7.0820, 'longitude' => -73.0920, 'order_index' => 1],
            ['route_id' => 9, 'latitude' => 7.0770, 'longitude' => -73.0940, 'order_index' => 2],
            ['route_id' => 9, 'latitude' => 7.0720, 'longitude' => -73.0930, 'order_index' => 3],
            ['route_id' => 9, 'latitude' => 7.0700, 'longitude' => -73.0930, 'order_index' => 4],
            ['route_id' => 9, 'latitude' => 7.0720, 'longitude' => -73.0940, 'order_index' => 5],
            ['route_id' => 9, 'latitude' => 7.0750, 'longitude' => -73.0950, 'order_index' => 6],
            ['route_id' => 9, 'latitude' => 7.0780, 'longitude' => -73.0960, 'order_index' => 7],
            ['route_id' => 9, 'latitude' => 7.0720, 'longitude' => -73.0940, 'order_index' => 8],
            ['route_id' => 9, 'latitude' => 7.0680, 'longitude' => -73.0910, 'order_index' => 9],
            ['route_id' => 9, 'latitude' => 7.0720, 'longitude' => -73.0930, 'order_index' => 10],
            ['route_id' => 9, 'latitude' => 7.0820, 'longitude' => -73.0920, 'order_index' => 11],
        ]);

        // Coordenadas Ruta 10
        DB::table('route_coordinates')->insert([
            ['route_id' => 10, 'latitude' => 7.0300, 'longitude' => -73.0700, 'order_index' => 1],
            ['route_id' => 10, 'latitude' => 7.0380, 'longitude' => -73.0760, 'order_index' => 2],
            ['route_id' => 10, 'latitude' => 7.0420, 'longitude' => -73.0790, 'order_index' => 3],
            ['route_id' => 10, 'latitude' => 7.0480, 'longitude' => -73.0820, 'order_index' => 4],
            ['route_id' => 10, 'latitude' => 7.0530, 'longitude' => -73.0840, 'order_index' => 5],
            ['route_id' => 10, 'latitude' => 7.0600, 'longitude' => -73.0870, 'order_index' => 6],
            ['route_id' => 10, 'latitude' => 7.0660, 'longitude' => -73.0900, 'order_index' => 7],
            ['route_id' => 10, 'latitude' => 7.0720, 'longitude' => -73.0930, 'order_index' => 8],
            ['route_id' => 10, 'latitude' => 7.0790, 'longitude' => -73.0960, 'order_index' => 9],
            ['route_id' => 10, 'latitude' => 7.0840, 'longitude' => -73.0980, 'order_index' => 10],
            ['route_id' => 10, 'latitude' => 7.0870, 'longitude' => -73.0990, 'order_index' => 11],
            ['route_id' => 10, 'latitude' => 7.0840, 'longitude' => -73.0980, 'order_index' => 12],
            ['route_id' => 10, 'latitude' => 7.0530, 'longitude' => -73.0840, 'order_index' => 13],
            ['route_id' => 10, 'latitude' => 7.0380, 'longitude' => -73.0760, 'order_index' => 14],
            ['route_id' => 10, 'latitude' => 7.0300, 'longitude' => -73.0700, 'order_index' => 15],
        ]);
    }
}
