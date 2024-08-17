<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('gps_bus_id')->default('');
            $table->string('name');
            $table->string('latitude')->default(''); // Changed 'lat' to 'latitude'
            $table->string('longitude')->default(''); // Changed 'lng' to 'longitude'
            $table->string('current_station_id')->default(''); // Changed 'currentStationId' to 'current_station_id'
            $table->string('current_station_name')->default(''); // Changed 'currentStationName' to 'current_station_name'
            $table->string('next_station_name')->default(''); // Changed 'nextStationName' to 'next_station_name'
            $table->string('next_station_id')->default(''); // Changed 'nextStationId' to 'next_station_id'
            $table->integer('near_map_line_point_id')->default(0); // Changed 'nearMapLinePointId' to 'near_map_line_point_id'
            $table->string('time_location_change')->default(''); // Changed 'timeLocationChange' to 'time_location_change'
            $table->string('trip_id')->default('');
            $table->enum("status", ["active", "inactive"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
