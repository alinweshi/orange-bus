<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'gps_bus_id',
        'name',
        'latitude', // Changed 'lat' to 'latitude'
        'longitude', // Changed 'lng' to 'longitude'
        'current_station_id', // Changed 'currentStationId' to 'current_station_id'
        'current_station_name', // Changed 'currentStationName' to 'current_station_name'
        'next_station_name', // Changed 'nextStationName' to 'next_station_name'
        'next_station_id', // Changed 'nextStationId' to 'next_station_id'
        'near_map_line_point_id', // Changed 'nearMapLinePointId' to 'near_map_line_point_id'
        'time_location_change', // Changed 'timeLocationChange' to 'time_location_change'
        'trip_id',
        'status',
        'ok',
    ];
}
