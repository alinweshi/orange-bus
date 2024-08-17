<?php

namespace Database\Seeders\backend;

use App\Models\Bus;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

// Import the Faker Factory

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Bus::create([
                'gps_bus_id' => $faker->unique()->uuid,
                'name' => $faker->word,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
                'current_station_id' => $faker->randomNumber(),
                'current_station_name' => $faker->word,
                'next_station_name' => $faker->word,
                'next_station_id' => $faker->randomNumber(),
                'near_map_line_point_id' => $faker->numberBetween(1, 100),
                'time_location_change' => $faker->dateTime,
                'status' => $faker->randomElement(['active', 'inactive']),
                "trip_id" => $faker->randomNumber(),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,

            ]);
        }
    }
}
