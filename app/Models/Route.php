<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['name', 'color_hex'];

    // Relación con las coordenadas
    public function coordinates()
    {
        return $this->hasMany(RouteCoordinate::class)->orderBy('order_index');
    }
}