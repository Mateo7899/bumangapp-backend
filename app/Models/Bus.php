<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['route_id', 'license_plate', 'current_lat', 'current_lng'];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}