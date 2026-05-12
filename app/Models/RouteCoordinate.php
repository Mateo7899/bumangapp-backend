<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RouteCoordinate extends Model
{
    protected $fillable = ['route_id', 'latitude', 'longitude', 'order_index'];
}