<?php

namespace App\Http\Controllers;

use App\Models\Route; // Importamos nuestro Modelo
use Illuminate\Http\Request;

class RouteController extends Controller
{
    // Esta función devolverá todas las rutas y sus puntos en el mapa
    public function index()
    {
        // Buscamos todas las rutas y de paso traemos sus "coordinates"
        $routes = Route::with('coordinates')->get();
        
        // Devolvemos la información en formato JSON (que es lo que Android entiende)
        return response()->json([
            'success' => true,
            'data' => $routes
        ]);
    }
}